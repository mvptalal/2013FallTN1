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
	$conn = new mysqli('localhost', 'n02176156', 's928649', 'n02176156_db');
	return;
}

function fetch_all($sql)
{
		$ret = array();
		$conn = GetConnection(); //connection to database
		$result = $conn->query($sql);
		
		while ($rs = $result->fetch_assoc()) { //goes though all the records
			$ret[] = $rs; // like calling an ADD function
			
		}
		
		$conn->close(); //closes the connection
		return $ret;
}		
function fetch_one($sql)
{
	$arr = fetch_all($sql);
	return $arr[0];
}
