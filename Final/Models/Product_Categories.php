<?php

/**
 * 
 */
class Product_Categories {
	
		static public function Get()
		{
			$ret = array();
			$conn = GetConnection();
			$result = $conn->query('SELECT * FROM Product_Categories');
			while ($rs = $result->fetch_assoc()) {
				$ret[] = $rs;
				
			}
			
			$conn->close();
			return $ret;
		}		
		
	}

