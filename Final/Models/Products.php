<?php

/**
*
*/
class Products {
        /* Wow, that is quite an online editor */
        static public function Get()
        {
                return fetch_all('SELECT * FROM Products');
        }
        static public function GetByCategory($CategoryId)
        {
                $sql = " SELECT * FROM Products 
                                 Where Product_Categories = $CategoryId
                ";
                return fetch_all($sql);
        }
        static public function GetCategories()
        {
                $sql = " SELECT * Product_Categories ";
                return fetch_all($sql);
        }
        
        
}