<?php
use App\Mail\ActivateActivateAccount;
use App\Mail\ForgetPassword;
use App\Mail\Reminders;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/activateEmail',function(){
	Mail::to('kibuikamwangi@gmail.com')->send(new ActivateActivateAccount('Samuel Mwangi2') );//'Samuel Mwangi2'
	return "Mail Sent";
	
	//return view('mail.accountActivation');// layouts.masterMail  accountActivation forgetPassword
});

Route::get('/passResetEmail',function(){
	Mail::to('kibuikamwangi@gmail.com')->send(new ForgetPassword('Scientist Mwangi') );//'Samuel Mwangi2'
	return "Resetpass Mail Sent";
});
Route::get('/reminderEmail',function(){
	Mail::to('kibuikamwangi@gmail.com')->send(new Reminders('Grace Mwangi') );//'Samuel Mwangi2'
	return "Reminder Mail Sent";
});







