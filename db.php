<?php 
/**
* 
*/
class DBConnect
{
	// private static $Server="localhost";
	// private static $user="ingenuity";
	// private static $password="3zpcsxzYcaARUK9V";
	// private static $dbName="ingenuity";
	function __construct()
	{
	}
	public static function getConnect()
	{
		// $con=mysqli_connect(
		// 	self::$Server,
		// 	self::$user,
		// 	self::$password,
		// 	self::$dbName);
		// if(!$con)
  //   	{
  //       	echo '数据库连接失败，请联系系统管理员解决。';
  //   	}
		// mysqli_query($con,"set character set 'utf8'");//读库 
  //   	mysqli_query($con,"set names 'utf8'");//写库 
		// return $con;
		$con = mysqli_connect(SAE_MYSQL_HOST_M, SAE_MYSQL_USER, SAE_MYSQL_PASS, SAE_MYSQL_DB, SAE_MYSQL_PORT);
		mysqli_query($con,"set character set 'utf8'");//读库 
  		mysqli_query($con,"set names 'utf8'");//写库 
		return $con;
	}

}
 ?>