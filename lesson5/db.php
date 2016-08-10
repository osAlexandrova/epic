<?php
include_once("config.php");
function addPost ($text){
		global $db;
		$stmt = $db->prepare ("INSERT INTO `MESSAGES` (`name`) VALUES (:text)");
		$stmt->execute(['text' => $text]);
		return ($stmt->errorCode()[0]);
	}

	function getPosts(){
		global $db;
		$result = $db->query("SELECT * FROM `MESSAGES`");
		$data =[];
		while ($row = $result -> fetch ())
		{
				$data[] = $row;
		}

		return $data;
	}

	function removePost ($id){
		global $db;
		$stmt=$db->prepare ("DELETE FROM `MESSAGES` WHERE `id` = :id");
		$stmt->execute (['id'=>$id]);
			return ($stmt->errorCode()[0]);
	}

	function updatePost ($id, $name){
		global $db;
		$stmt=$db->prepare ("UPDATE `MESSAGES` SET `name`= :name WHERE `id` = :id");
		$stmt->execute (['id'=>$id, 'name'=>$name]);
		return ($stmt->errorCode()[0]);
	}

