  	 	<div class="container">

<?php
	include_once '../../inc/_global.php';
	
	$model = Addresses::Get();
	$view ='list.php';
	include '../Shared/_Layout.php';
	/*
	 root,usertypes,contacmethods,addresstup,prod-keyowords,admin,employee,users
	 * 
	 */
	