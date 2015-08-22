<?php namespace App\Http\Controllers;
use Input;
use View;
//use App\Question;
use App\Http\Requests;
use Request;
use Carbon\Carbon;
use App\Models\Question;
use App\Models\Subject_List;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\InsertQuestionRequest;
class QuestionController extends Controller {


	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function questions()
	{
		//echo (Session::get('type')); die();
		if(Session::has('id') && (Session::get('type') === 'Admin' || Session::get('type')==='SuperAdmin')){
			return view('questions')->with('loggedIn', 'yes');
		}
//		if(Session::has('id') && Session::get('type') === 'SuperAdmin'){
//			return view('questions')->with('loggedIn', 'yes');
//		}
		else{
			echo 'You are not authorized';
		}
	}

	public function insert()
	{

		if(Session::has('id') && (Session::get('type') === 'Admin' || Session::get('type')==='SuperAdmin'))
		{
			$sub = Subject_List::lists('subject_name');
			return View::make ('insert')->with('sub' , $sub);
		}
		else{
			echo 'You are not authorized';
		}
	}

	public function store2(InsertQuestionRequest $request){
		echo "valid";
	}

	public function store(InsertQuestionRequest $request)
	{
		if (Session::has('id')&& (Session::get('type')==='Admin' || Session::get('type')==='SuperAdmin'))
		{
/*		$input = Request::all();
		Question::create($input);
		$input['created_at'] = Carbon::now();
		//return 's';
		return redirect('questions');
*/

//		$sub = Subject_List::lists('subject_name')->with('sub', array('sub'=> $sub));
		$sub      = Input::get('subject');
		$qus_des  = Input::get('q_description');
		$opt_1    = Input::get('q_opt_1');
		$opt_2    = Input::get('q_opt_2');
		$opt_3    = Input::get('q_opt_3');
		$opt_4    = Input::get('q_opt_4');
		$ans      = Input::get('q_ans');
		$question = new Question;
		$question->subject = $sub;
		$question->q_description = $qus_des;
		$question->q_opt_1 = $opt_1;
		$question->q_opt_2 = $opt_2;
		$question->q_opt_3 = $opt_3;
		$question->q_opt_4 = $opt_4;
		$question->q_ans = $ans;
		//$question->save();
		$question['created_at'] = Carbon::now();
		$question->save(array($request));

		}
		else{
			echo 'You are not authorized';
		}
	}

//	public function insertJS()
//	{
//		if(isset($_POST['a']))
//		{
//			print_r ($_POST);
//		}
//	}
	public function showAll()
	{
		if (Session::has('id') &&(Session::get('type')==='Admin' || Session::get('type')==='SuperAdmin'))
		{
		$question = Question::all();
		return View::make('questions',array('questions' => $question));

		//return redirect()->route('questions');
		}
		else
		{
			echo 'You are not authorized';
		}
	}
	public function edit($id)
	{
//		echo 'ewdfjkdf';
		if(Session::has('id') && (Session::get('type') === 'Admin' || Session::get('type')==='SuperAdmin'))
		{
			$question = Question::findOrFail($id);
			return view('edit', compact('question'));
		}
		else{
			echo 'You are not authorized';
		}
	}

	public function update($id, InsertQuestionRequest $request)
	{
		//Eloquent::unguard();
		if(Session::has('id') && (Session::get('type')==='Admin' || Session::get('type')==='SuperAdmin'))
		{
			$question = Question::findOrFail($id);

			$question->update($question = $request->all());

			return redirect('questions');
		}
		else
		{
			echo 'You are not authorised';
		}
	}

	public function delete($id)
	{
		//Eloquent::unguard();
		if(Session::has('id') && (Session::get('type')==='Admin' || Session::get('type')==='SuperAdmin'))
		{
			$question = Question::findOrFail($id);

			$question->delete($question = Request::all());

			return redirect('questions');
		}
		else
		{
			echo 'You are not authorised';
		}
	}
}
