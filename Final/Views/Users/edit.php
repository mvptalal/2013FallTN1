<style type="text/css">
	.error {color: red; }
</style>
<div class="conainer">
	
	<? if(isset($errors) && $errors): ?>
	<ul class="error">
		<? foreach ($errors as $key => $value): ?> 
		<li>
			<label><?=$key?>:</label> <?=$value?>
		</li>
			<? endforeach ?>
	</ul>
	<? endif; ?> 	
	
<form action="?action=save" method"post" class="form-horizontal row">
	
	<div class="form-group <?= isset($errors['FirstName']) ? 'has-error' : ''   ?>">
	<label for="FirstName" class="col-sm-2 control-label">First Name</label>
	<div class="col-sm-10">
			<input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control col-sm-10" value="<?=$model['FirstName']?>"/> 
			<?if(isset($errors['FirstName'])): ?><span class="error"> <?= $errors['FirstName'] ?> </span> <? endif; ?>
</div>
</div>
	<div class="form-group  <?= isset($errors['LastName']) ? 'has-error' : ''   ?>">
	<label for="LastName" class="col-sm-2 control-label">Last Name</label>
	<div class="col-sm-10">
			<input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control col-sm-10" value="<?=$model['LastName']?>"/> 
			<?if(isset($errors['LastName'])): ?><span class="error"> <?= $errors['LastName'] ?> </span> <? endif; ?>

</div>
</div>
	
	<div class="form-group  <?= isset($errors['Password']) ? 'has-error' : ''   ?>">
	<label for="Password" class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
			<input type="password" name="Password" id="Password" placeholder="Password" class="form-control col-sm-10" value="<?=$model['Password']?>"/> 
					<?if(isset($errors['Password'])): ?><span class="error"> <?= $errors['Password'] ?> </span> <? endif; ?>

</div>
</div>
	
	<div class="form-group  <?= isset($errors['UserType']) ? 'has-error' : ''   ?>">
	<label for="UserType" class="col-sm-2 control-label">User Type</label>
	<div class="col-sm-10">
			<input type="text" name="UserType" id="UserType" placeholder="User Type" class="form-control col-sm-10" value="<?=$model['UserType']?>"/> 
					<?if(isset($errors['UserType'])): ?><span class="error"> <?= $errors['UserType'] ?> </span> <? endif; ?>

</div>
</div>
	
		<div class="form-group>
			<div class="col-sm-offset-2 col-sm-10">
			
			<input type="submit" class="form-control btn btn-primaty" value="Save" />
		</div>
		</div>
</form>
</div>