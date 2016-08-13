<?php
require_once("db.php");
		
		addPost($_POST['data']);
		header ('Location: postRead.php');