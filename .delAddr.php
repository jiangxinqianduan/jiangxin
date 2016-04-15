<?php session_start(); ?>
<?php
require('isLogin.php');
require('./db.php');
$con=dbConnect::getConnect();
$user="default";
$a_id=$_GET['addr'];
if(isset($_SESSION['username']))$user=$_SESSION['username'];


mysqli_query($con,"delete from address where a_id=".$a_id." and u_name='".$user."'");

header("Location:".$_SERVER['HTTP_REFERER']);
?>