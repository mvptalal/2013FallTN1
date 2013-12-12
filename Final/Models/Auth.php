<?
	const ADMIN = 1;
	const SALT = "Hey Dum";
	class Auth
	{
		public static function IsLoggedIn()
		{
			return self::GetUser() != null;
		}
		public static function GetUser()
		{
			return $_SESSION['Users'];
		}
		public static function HasPermission()
		{
			$user = self::GetUser();
			return $user['UserType'] == ADMIN;
		}
		public static function LogIn($userName, $password)
		{
			$sql = "SELECT U.*
                    FROM Users U   			
              		WHERE U.LastName='$userName' ";
					
                        $user = fetch_one($sql);
						if($user['Password'] == hash('md5', SALT . $password)){
						$_SESSION['User'] = $user;
						}
		}
		static public function Secure()
		{
			if(!self::LogginIn()){
				header('Location :' . "/n0217156/2013/Final/Views/Auth?action=login"); die();
			}
		}
	}
