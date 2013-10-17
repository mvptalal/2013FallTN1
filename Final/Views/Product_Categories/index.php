  	 	<div class="container">

<?php
	include_once '../../inc/_global.php';
	
	$model = Product_Categories::Get();
	$view ='list.php';
	include '../Shared/_Layout.php';
	/*
	 root,usertypes,contacmethods,addresstup,prod-keyowords,admin,employee,users
	 * 
	 */
	