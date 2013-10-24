<?php

/**
 * 
 */
class Users {
	
		static public function Get($id = null)
		{
			if(isset($id)){
				return fetch_one("SELECT * FROM Users WHERE id=$id");	
			}
			else
		    {
				return fetch_all('SELECT * FROM Users');	
				
			}
			
		}		
		
		static public function Save($row)
		{
			$sql = " Insert Into Users (FirstName, LastName, Password, UserType) "
				.  " Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserType]' ) ";
			$conn = GetConnection();
			$conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			if($error){
				return array('db_error' => $error);
			} else{
				return false;
			}
		}
		static public function Blank()
		{
			return array( 'FirstName' => null, 'LastName'=> null, 'Password'=> null, 'UserType'=> null, 'FBID'=> null );
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if(!$row['FirstName']) $errors['FirstName'] = 'Is Required';
			if(!$row['LastName']) $errors['LastName'] = 'Is Required';
			if(! is_numeric( $row['UserType'])) $errors['UserType'] = 'Must Be a Number';
			if(!$row['UserType']) $errors['UserType'] = 'Is Required';
			
			if(count($errors) == 0) {
				return false;
			}else{
				return $errors;
			}

		}
	}

