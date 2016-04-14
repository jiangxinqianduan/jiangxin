<?php 
session_start();
$user="default";
if(isset($_SESSION['username'])&&isset($_SESSION['isLogin']))
{ 
	echo '已经登陆';
	$user=$_SESSION['username'];
}
?>