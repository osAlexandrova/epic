<?php
include_once("config.php");
function addPost ($text){
		$db=connection();
		$stmt = $db->prepare ("INSERT INTO `messages` (`name`) VALUES (:text)");
		$stmt->execute(['text' => $text]);
		return ($stmt->errorCode()[0]);
	}
	function getPost($id){
		$db = connection();
		$stmt = $db->prepare ("SELECT * FROM `messages` WHERE `id` =:id");
		$result=$stmt->execute(['id'=> $id]);

		return $stmt -> fetch();
	}

	function getPosts(){
		$db=connection();
		$result = $db->query("SELECT * FROM `messages`");
		$data =[];
		while ($row = $result -> fetch ())
		{
				$data[] = $row;
		}

		return $data;
	}

	function removePost ($id){
		$db=connection();
		$stmt=$db->prepare ("DELETE FROM `messages` WHERE `id` = :id");
		$stmt->execute (['id'=>$id]);
			return ($stmt->errorCode()[0]);
	}

	function updatePost ($id, $name){
		$db=connection();
		$stmt=$db->prepare ("UPDATE `messages` SET `message`= :name WHERE `id` = :id");
		$stmt->execute (['id'=>$id, 'name'=>$name]);
		return ($stmt->errorCode()[0]);
	}

