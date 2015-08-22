<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('/details/{id}', 'UserController@details');


Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@checkLogin');
Route::get('/registration', 'UserController@registration');
Route::post('/registration', 'UserController@checkRegistration');
Route::get('questions', 'QuestionController@questions');
Route::get('questions/insert', 'QuestionController@insert');
Route::post('questions', 'QuestionController@store');
Route::post('questions2', 'QuestionController@store2');
// Route::get('questions/insert', function()
//{
//	if(Request::ajax())
//	{
//		return 'QuestionController@insert';
//	}
//});
//Route::post('question', function()
//{
//	if(Request::ajax())
//	{
//		return Response::json(Request::all());
//	}
//});
Route::get('questions', 'QuestionController@showAll');
Route::get('quiz', 'QuizController@quiz');
Route::post('quiz', 'QuizController@checkQuiz');
Route::get('questions/{id}/edit', 'QuestionController@edit');
Route::post('saveQuestion', 'QuestionController@store');
Route::patch('questions/{id}', 'QuestionController@update');
Route::delete('questions/{id}','QuestionController@delete');
Route::get('result/{marks}', 'QuizController@result');
Route::get('/logout', 'UserController@getLogout');
Route::get('super', 'superAdminController@index');
Route::post('super','superAdminController@store');
//Route::get('super', 'superAdminController@showAll');
Route::get('super/{id}/super','superAdminController@edit');
Route::patch('super/{id}', 'superAdminController@update');
Route::delete('super/{id}', 'superAdminController@delete');
//Route::resource('questions', 'QuestionController');

