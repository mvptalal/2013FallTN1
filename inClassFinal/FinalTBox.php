<?php
function GetConnection()
{
	//global $sql_password;
	$conn = new mysqli('localhost', 'plotkinm', 'FaceBooK', 'plotkinm_db');
	
	
	try{
		
		$dbh = new PDO("mysql:host=$hostname;dbname=US_Zip_Codes", $conn);
	}
	catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	
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
