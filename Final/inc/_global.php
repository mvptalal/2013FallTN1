<?php
//include_once ('_password.php');

include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/ContactMethods.php';
include_once __DIR__ . '/../Models/Orders.php';
include_once __DIR__ . '/../Models/Order_Items.php';
include_once __DIR__ . '/../Models/Product_Categories.php';
include_once __DIR__ . '/../Models/Supliers.php';
include_once __DIR__ . '/../Models/Products.php';








function GetConnection()
{
	//global $sql_password;
	$conn = new mysqli('localhost', 'n02176156', 's928649', 'n02176156_db');
	return $conn;
}

function fetch_all($sql)
{
        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
        echo $conn->error;
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
        }
        
        
        $conn->close();
        return $ret;
}

function fetch_one($sql)
{
        $arr = fetch_all($sql);
        return $arr[0];
}
