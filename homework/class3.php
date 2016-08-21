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
abstract public function checkLogin($login);
abstract protected function setPassword($password);
}
class Admin extends User
{
  public function checkLogin($login)
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
class Guest extends User
{
	public function checkLogin($login)
	{
		if($login == 'Вася'){
			$this->login = $login;
		}
		else {
			echo 'У тебя нет ни на что прав. Досвидули!!!';
			exit();
			}
	}
protected function setPassword($password)
{
	if ($password == '12345'){
		$this->password = $password;
	}
	else {
		echo 'Неверный пародь, красаучег';
		exit();
	     }
    }
}


$newAdmin = new Admin('Olia', '11111');
$newAdmin->greeting();

echo '<br>';

$newGuest = new Guest('Вася', '11111');
$newGuest->greeting();