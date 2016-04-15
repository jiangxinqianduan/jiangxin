<?php
require('isLogin.php');
require('./db.php');
$con=dbConnect::getConnect();
$user="default";
if(isset($_SESSION['username']))$user=$_SESSION['username'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$detail=$_POST['detail'];
mysqli_query($con,"INSERT INTO address(u_name, a_name, a_city, a_detail, a_phone) VALUES ('$user','$name','city','$detail','$phone');");
header("Location:".$_SERVER['HTTP_REFERER']);
?>