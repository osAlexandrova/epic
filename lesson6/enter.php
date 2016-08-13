<?php
	session_start();
	if(is_numeric ($_SESSION['id']))
	{
		header("Location:read.php");
	}
	echo '<form action="loginProcessing.php" method="post">';
	echo '<input type="text" name="login"/>  &nbsp';
	echo '<input type="password" name="pass" />';
	echo '<button>OK</button>';
