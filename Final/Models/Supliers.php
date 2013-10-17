<?php

/**
 * 
 */
class Supliers {
	
		static public function Get()
		{
			$ret = array();
			$conn = GetConnection();
			$result = $conn->query('SELECT * FROM Supliers');
			while ($rs = $result->fetch_assoc()) {
				$ret[] = $rs;
				
			}
			
			$conn->close();
			return $ret;
		}		
		
	}

