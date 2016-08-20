<?php 
class MyFirstClass
{
	public $someProp='Some default value';
	
	function __construct()
	{
		echo 'I`m alive, alive!';
	}
}
$myObject=new MyFirstClass();