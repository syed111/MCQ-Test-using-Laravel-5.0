<?php namespace App\Http\Controllers;
use Input;
use View;
use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Subject_List;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\InsertSubjectRequest;

class superAdminController extends Controller {

	public function index()
	{
		if(Session::has('id') && Session::get('type') === 'SuperAdmin')
		{
			//echo 'hello';
			$subject = Subject_List::all();
			return View::make ('super', array('subjects' => $subject));
			//return view('super', compact('subject'));
		}
		else
		{
			echo 'You are not authorized';
		}
	}

	public function store(InsertSubjectRequest $request)
	{
		if(Session::has('id') && Session::get('type') === 'SuperAdmin')
		{
			$name_of_sub = Input::get('subject_name');
			$subject = new Subject_List;
			$subject->subject_name = $name_of_sub;
			$subject['created_at'] = Carbon::now();
			$subject->save(array($request));
			$subject = Subject_List::all();

			return View::make ('super', array('subjects' => $subject));
		}
		else
		{
			echo 'You are not authorized';
		}
	}

//	public function showAll()
//	{
//		if(Session::has('id') &&  Session::get('type')==='SuperAdmin')
//		{
//			$subject = Subject_List::all();
//			return View::make ('super',array('subjects' => $subject));
//		}
//		else
//		{
//			echo 'You are not authorized';
//		}
//	}

	public function edit($id)
	{
//		echo 'ewdfjkdf';
		if(Session::has('id') &&  Session::get('type')==='SuperAdmin')
		{
			$subject= Subject_list::findOrFail($id);
			return view('super', compact('subject'));
		}
		else
		{
			echo 'You are not authorized';
		}
	}

	public function update($id, Request $request)
	{
//		dd(Input::get('subject_name'));

		//Eloquent::unguard();
		if(Session::has('id') && Session::get('type')==='SuperAdmin')
		{
			$subject = Subject_List::findOrFail($id);
			$subject->subject_name=Input::get('subject_name');
			$subject->save();


			return redirect('super');
		}
		else
		{
			echo 'You are not authorised';
		}
	}

	public function delete($id)
	{
		//Eloquent::unguard();
		if(Session::has('id') && Session::get('type')==='SuperAdmin')
		{
			$subject = Subject_List::findOrFail($id);

			$subject->delete($subject = Request::all());

			//return redirect('super');
			return redirect ('super');
		}
		else
		{
			echo 'You are not authorised';
		}
	}
}
