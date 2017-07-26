<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreRegisterPrepripartaion extends Controller
{
    //
	//hashing pasword
	// creating the unique_user_id
	
	public static function generateUniqID()
	{
		
		  $uuid=substr(md5(uniqid(rand(), TRUE)), 0, 19);
		
		/*
			$user=User::whereId(1);//whereEmail($email);
			$uuid=$user->user_unique_id;
		*/
		  return $uuid;
	}
	public static function getUserUniqueID($username)
	{
		$user=User::whereId(1);
		$uuid=$user->user_unique_id;
		return $uuid;
	}
	
	public static function generatePwdSaltOnLogin($username,$type)
	{
		if($type==1)
		{
			$uniqueid=PreRegisterPrepripartaion::generateUniqID();
		}else
		{
			$uniqueid=getUserUniqueID();
		}
		
		$salt=sha1($username.$uniqueid);
		return $salt;
		
	}
	
	public static function hashPassword($password,$username,$type)
	{
		
	
		$salt=PreRegisterPrepripartaion::generatePwdSaltOnLogin($username,$type);
		return crypt($password,'$6$'.$salt);
	}
	
}
