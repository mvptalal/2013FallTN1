<?php

/**
 * 
 */
class Order_Items {
	
		static public function Get()
		{
			$ret = array();
			$conn = GetConnection();
			$result = $conn->query('SELECT * FROM Order_Items');
			while ($rs = $result->fetch_assoc()) {
				$ret[] = $rs;
				
			}
			
			$conn->close();
			return $ret;
		}		
		
	}

