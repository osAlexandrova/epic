<?php
abstract class Human
{
	public $name ='unknow';
	protected $sex = 'unknow';

	 public function __construct($name)
	{
		$this->name = $name;
		//$this->sex = $sex;
		static::setSex();
	}
	function greeting()
	{
		echo 'Привет, меня зовут '. $this->name . '!';
		echo ' Я '.$this->sex. '!';
	}
abstract protected function setSex();
   /* {
	if($sex == 'мужик' || $sex == 'девочка'){
		$this->sex = $sex;
	    } 
	else {
		echo 'Неверный пол, котик!';
		exit();
	    }
    }*/
}
class Man extends Human
    {
	function greeting()
	    {
		parent::greeting();
		echo ' И у меня есть борода!';
	    }
	protected function setSex()
	    {
		$this->sex = 'мужик';	
	    }
    }

class Woman extends Human
    {
	function greeting()
	    {
		parent::greeting();
		echo ' Зато у меня есть грудь!';
	    }
	protected function setSex()
	    {
	    $this->sex = 'девочка';
	    }
    }

$personMale = new Man('Роман');
$personMale->greeting();

echo '<br>';

$personFemale = new Woman('Оленька');
$personFemale->greeting();

echo '<br>';

$personUnknown = new Man('Рыжик');
$personUnknown->greeting();