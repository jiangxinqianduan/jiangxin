<?php 
session_start();

$user=$_POST['username'];
$password=$_POST['pwd'];
require('db.php');


$con=DBconnect::getConnect('ingenuity');
if( mysqli_connect_errno($con))echo '目前无法连接到数据库，请联系系统管理员。';
$result=mysqli_query($con,"select u_name,u_id from user where u_name=$user and u_pwd=$password");
if(mysqli_num_rows($result)==0)echo "用户名或密码错误";
else
{
	echo '登陆成功';
	$_SESSION['username']=$user;
	$_SESSION['isLogin']=true;
}
?>

<?php
	if(isset($_SESSION['username'])&&isset($_SESSION['isLogin'])
	{
		echo '已经登陆';
	}
?>