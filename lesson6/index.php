<?php
	session_start();
	require_once("db.php");
	require_once("config.php");

	$controller = $_GET['c'];
	$action = $_GET['a'];

	switch($controller) {
		case 'post':
			switch($action){
				case 'add':
				postAdd();
				break;
				case 'edit':
				postEdit();
				break;
				case 'addSave':
				postAddSave();
				break;
				case 'editSave':
				postEditSave();
				break;
			}
			break;
		default:
		index();
		break;
	}
	function errorPage($msg){
		echo "error:{$msg}";
	}
	function postAddSave()
	{
		if(checkToken()){
			if(db_addPost($_POST['text'])){
				index();
			}
			else {
				errorPage(__FUNCTION__);
			}
		}
		else {
			errorPage(__FUNCTION__ . "token");
		}
	}

	function postAdd()
	{ 
		echo template("template.php",[
			'body'=> template("postAdd.php",[
				'_aft'=>makeToken()
				])]
			);
	}
	function postRead()
	{
		echo template("template.php",[
			'body'=> template("postRead.php",[
				'data'=> getPosts ()
				])
			]);
	}
	function postEdit()
	{
         echo template("template.php", [
         	'body'=> template("postEdit.php",[
         		'_aft'=> makeToken(),
         		'post'=> getPost ($_GET['id'])
         		])
         	]);
	}
	function postEditSave()
	{
		if(checkToken()){
			updatePost ($_POST['id'],$_POST['data']);
			header('Location: index.php'); 
		}
		else {
			errorPage(__FUNCTION__);
		}
	}
	
	function postRemove()
	{
		$id = $_GET['id'];
		removePost($id);
		postRead();
	}
	function index() {
		postRead();
	}