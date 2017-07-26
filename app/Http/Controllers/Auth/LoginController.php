<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PreRegisterPrepripartaion;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\user;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 public function login(Request $request)
	 {
		
		
		
		$inputs=$request->all();
		$user=user::where('email',$inputs['email'])->first();//->get();
		$credentials=array(
		'username'=>$inputs['username'],
		'password'=>$inputs['password'],
		'uuid'=>$user->user_unique_id
		);
Auth::attempt(credentials)
		//dd($inputs);
		//$type=1;
		//$username=$request->email;
		//$password=trim($request->password);
		echo "Logged in username unique id ".$user->user_unique_id;
		//dd($user);
		//echo "User email found ";
		//echo "Hashed password ".PreRegisterPrepripartaion::hashPassword($username,$password,$type);
		
		 	
		 //auth::user()
	 }
	 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
