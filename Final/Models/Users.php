<?php

/**
 * 
 */
class Users {
	
		static public function Get()
		{
			$ret = array();
			$conn = GetConnection(); //connection to database
			$result = $conn->query('SELECT * FROM 2013FALL_Users');
			
			while ($rs = $result->fetch_assoc()) { //goes though all the records
				$ret[] = $rs; // like calling an ADD function
				
			}
			
			$conn->close(); //closes the connection
			return $ret;
		}		
		
	}

