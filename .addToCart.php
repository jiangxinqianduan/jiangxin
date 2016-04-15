<?php
    require('isLogin.php');
    require('./db.php');
    $con=dbConnect::getConnect();
    $user="default";
    $gid=$_GET['g_id'];
    if(!(isset($_SESSION['username'])))header("Location:login.php");
    $user=$_SESSION['username'];
    mysqli_query($con,"insert into cart(u_name,g_id,cart_time) VALUES ('".$user."',".$gid.",'".date("Y-m-d")."')");
    header("Location:".$_SERVER['HTTP_REFERER']);
?>