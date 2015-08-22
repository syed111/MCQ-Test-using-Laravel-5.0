<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Question;
use App\Models\Result;
use View;
use Request;
use Input;
use DB;
use Illuminate\Support\Facades\Session;
//  use Illuminate\Routing\Controller;

class QuizController extends Controller
{
	public function __construct()
	{
		//$this->middleware('guest');
	}

	public function quiz()
	{
		if(Session::has('id') && (Session::get('type')==='Student' || Session::get('type')==='SuperAdmin'))
		{
			//$questions = Question::all();
			//$ansAr = array(

			//);
			$random_question = Question::orderBY(DB::raw('Rand()','Unique()'))->take(2)->get(array('id', 'q_description', 'q_opt_1', 'q_opt_2', 'q_opt_3', 'q_opt_4', 'q_ans'));
			//print_r($random_question);
			$cnt = 0;
			foreach ($random_question as $tmp )
			{
//			    print_r($tmp);
//			    print("---------------\n-----------------");
				$cnt++;
			}
			$totNoOfQus = $cnt;
			//echo $cnt;
			$correct_answer = array_pluck($random_question, 'q_ans');
			$qIds = array_pluck($random_question, 'id');
			$combined = array_combine($qIds, $correct_answer);
//		    echo '<pre>';
//		    print_r($combined);
//		    die;

			Session::put('correct_answer', $combined);
			Session::put('total_qus', $totNoOfQus);

//		    return $correct_answer;
			return view::make('quiz')
				->with('title', 'QUIZ')
				->with('quiz' , $random_question);
			}
		else
		{
			echo 'You are not authorised';
		}
	}
	public  function checkQuiz()
	{
		if (Session::has('id') && (Session::get('type')==='Student' || Session::get('type')==='SuperAdmin'))
		{
			$input = Request::all();
			$correctAnswers = Session::get('correct_answer');
			$total_qus = Session::get('total_qus');

			$count = 0;
			foreach($correctAnswers as $key => $value)
			{
				$k = 'q-'. $key;
				if(isset($input[$k]) && $input[$k] == $value)
				{
					$count++;
				}
			}
			$marks = $count;
			$tot_marks = $total_qus;
			$s = $tot_marks - $marks;
			//echo $s;
			$result = new Result;
			$result->marks = $marks;
			$result->total_marks = $tot_marks;
			$result->unanswered = $s;
			$result->save();
			return View::make ('result', array('result'=>$result));
		}
		else
		{
			echo 'You are not authorized';
		}
	}
//	public function result()
//	{
//
//		return view();
//	}
}