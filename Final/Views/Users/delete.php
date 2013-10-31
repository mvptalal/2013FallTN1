<h3>
	Are You Sure You Want To Delete?
	<?=$model['FirstName']?> <?=$model['LastName']?>
</h3>
<form action="?action=delete" method="post">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	<input type="submit" value="Delete" class="btn btn-primary" />
	<a href="?action=list"> No, DON'T delete</a>
</form>
