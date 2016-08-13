
<form action="index.php?c=post&a=editSave" method="post">
Текст<input name="data" placeholder="content" value="<?=$post['message'];?>"/>
<input type="hidden" name="_aft" value="<?=$_aft;?>" /> 
<input type="hidden" name="id" value="<?=$post['id'];?>"/> 
<input type="submit" /> 
</form>


