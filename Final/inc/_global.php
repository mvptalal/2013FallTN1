<?php
include_once ('_password.php');

include_once __DIR__ . '../Models/Keywords.php';
include_once __DIR__ . '../Models/Users.php';
include_once __DIR__ . '../Models/Addresses.php';
include_once __DIR__ . '../Models/ContactMethods.php';
include_once __DIR__ . '../Models/Orders.php';
include_once __DIR__ . '../Models/Order_Items.php';
include_once __DIR__ . '../Models/Product_Categories.php';
include_once __DIR__ . '../Models/Supliers.php';
include_once __DIR__ . '../Models/Products.php';








function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02176156', $sql_password, 'n02176156_db');
	return;
}