<?php 
/**
* 
*/
class DBConnect
{
	private static $Server="localhost";
	private static $user="ingenuity";
	private static $password="3zpcsxzYcaARUK9V";
	 
	function __construct()
	{
	}
	public static function getConnect($dbName)
	{
		$con=mysqli_connect(
			self::$Server,
			self::$user,
			self::$password,
			$dbName);
		mysqli_query($con,"set character set 'utf8'");//读库 
    	mysqli_query($con,"set names 'utf8'");//写库 
		return $con;
	}

}
 ?>