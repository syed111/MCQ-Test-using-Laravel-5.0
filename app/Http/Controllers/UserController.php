<?php namespace App\Http\Controllers;
use Input;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class UserController extends Controller {

	public function __construct()
	{

	}

	public function login()
	{
		//db, processing, logic
		return view('login');
	}

	public function checkLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		$user = User::where('user_email', '=', $email)->where('user_pass', '=', $password)->first();

		if(count($user) === 0)
		{
			return view('login')->with(array('msg' => 'Incorrect Email or Password'));
		}

		else
		{
			Session::put('id', $user->id);
			Session::put('type', $user->user_type);

			if(Session::get('type')==($user->user_type == 'Student'))
			{
				//return redirect()->action('QuizController@quiz')->with('loggedIn', 'yes');
				return redirect('quiz');
			}
			if(Session::get('type')==($user->user_type == 'Admin'))
			{
				return redirect('questions/insert');
			}
			if(Session::get('type')==($user->user_type == 'SuperAdmin'))
			{
				return redirect ('super');
			}
		}

	}
	public function registration()
	{
		if(Session::has('type')){
			$type = Session::get('type');
		}else{
			$type = "";
		}
		return view ('registration')->with('type', $type);
	}
	public function checkRegistration()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		$address = Input::get('address');
		$user = new User;
		$user->user_email = $email;
		$user->user_pass = $password;
		$user->user_address = $address;
		$user->save();

	}

	public function getLogout()
	{
		//$this->auth->logout();
		Session::flush();
		return redirect ('/home');
	}

}
