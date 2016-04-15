<?php session_start(); ?>
<?php 
require('isLogin.php');
require('./db.php');
$con=dbConnect::getConnect();
$user="default";
$g_id=$_GET['g_id'];
if(isset($_SESSION['username']))$user=$_SESSION['username'];


mysqli_query($con,"delete from collection where g_id=".$g_id." and u_name='".$user."'");

header("Location:".$_SERVER['HTTP_REFERER']);
?>
