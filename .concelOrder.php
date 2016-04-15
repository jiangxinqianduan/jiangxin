<?php
require('isLogin.php');
require('./db.php');
$con=dbConnect::getConnect();
$user="default";
$o_id=$_GET['o_id'];
if(isset($_SESSION['username']))$user=$_SESSION['username'];


mysqli_query($con,"delete from good_order where o_id=".$o_id." and u_name='".$user."'");

header("Location:".$_SERVER['HTTP_REFERER']);
?>