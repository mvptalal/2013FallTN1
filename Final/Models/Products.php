<?php

/**
 * 
 */
class Products {
	
		static public function Get()
		{
			return fetch_all('SELECT * FROM PRODUCTS');
			
		}
			
		static public function GetAllInCategory($Categoryid)
		{
			return fetch_all("SELECT * FROM PRODUCTS WHERE 'Product_Categories'=$CategoryId);
		}
				
		
	}

