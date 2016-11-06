<?php

Route::post('exam/codeExec', function(){

    return \Execute::run(Request::get('lang'));
});
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
Route::post("code/submit", "ExamController@saveResult");

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('questions','QuestionsController');
Route::resource('questions.testcases','TestsCasesController');
Route::resource('exam','ExamController');