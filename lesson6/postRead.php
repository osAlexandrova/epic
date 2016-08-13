
	

	 	<ul>
	 		<?
	 			foreach($data as $post){
	 				echo "<li>".$post['message']." "."<a href ='index.php?id=".$post['id']."&c=post&a=delete'>Удалить</a>"." "."<a href ='index.php?id=".$post['id']."&c=post&a=edit'>Редактировать</a></li>";

	 			}
	 		?>
	 	</ul>

