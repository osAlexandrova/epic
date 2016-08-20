<?php
abstract class User
{
	protected $login;
	protected $pass;

	public function __construct($login, $password)
	{
		$this->login = $login;
		static::setPassword($password);
	}
	function greeting()
	{
       echo 'Привет, бобер!'. $this->login .'!';
	}
abstract protected function checkLogin($login);
abstract protected function setPassword($password);
}
class Admin extends User
{
  protected function checkLogin($login)
  {
  	 if ($login == 'Olia'){
  	 	$this->login = $login;
  	 }
  	 else {
  	 	echo 'У вас нет прав! ПОКА';
  	 	exit();
  	 }
  }
  protected function setPassword($password) 
  {
     if ($password == 'qwerty') {
     	$this->password = $password;
     }
     else {
     	echo 'Неверный пароль';
     	exit();
     }
  } 
}

$newAdmin = new Admin('Olia', 'qwerty');
$newAdmin->greeting();