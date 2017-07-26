<?php
if (! function_exists ( 'generateUniqID' )) {//to be stored in db
 function generateUniqID() {
  $uuid=substr(md5(uniqid(rand(), TRUE)), 0, 19);
  return $uuid;
 }
}

if (! function_exists ( 'generatePwdSaltOnRegister' )) {
 function generatePwdSaltOnRegister($username) {
  $uuid=generateUniqID();
  $salt=sha1($username.$uuid);
  return $salt;
 }
}

if (! function_exists ( 'generatePwdSaltOnLogin' )) {
 function generatePwdSaltOnLogin($username,$uuid) {
  $salt=sha1($username.$uuid);
  return $salt;
 }
}

if (! function_exists ( 'hashPwdOnRegister' )) {
 function hashPwdOnRegister($username,$pwd) {
  $options = [
    'salt' =>generatePwdSaltOnRegister($username),//mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
  ];
  $hashed_pwd= password_hash($pwd, PASSWORD_BCRYPT, $options);
  return $hashed_pwd;
 }
}

if (! function_exists ( 'hashPwdOnLogin' )) {
 function hashPwdOnLogin($username,$uuid,$pwd) {
  $options = [
    'salt' =>generatePwdSaltOnLogin($username,$uuid),//mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
  ];
  $hashed_pwd= password_hash($pwd, PASSWORD_BCRYPT, $options);
  return $hashed_pwd;
 }
}