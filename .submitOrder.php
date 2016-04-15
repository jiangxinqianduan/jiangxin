<?php
require('isLogin.php');
require('./db.php');
$con=dbConnect::getConnect();
$user="default";
if(isset($_SESSION['username']))$user=$_SESSION['username'];

$a_id=$_POST['address'];
$g_id=$_POST['g_id'];
$num=$_POST['num'];
$result=mysqli_query($con,"select * from address where a_id=$a_id");
$row=mysqli_fetch_array($result);
$address=$row['a_city'].$row['a_detail'];
$date=date("Y-m-d");

$name=$row['a_name'];
$msg=$_POST['message'];


$result=mysqli_query($con,"INSERT INTO good_order(u_name, g_id, o_addr, o_state, o_trans, o_time, o_num, o_name, o_msg) VALUES ('$user',$g_id,'$address','未付款','','$date',$num,'$name','$msg')");
header("Location:person_center.php");
?>