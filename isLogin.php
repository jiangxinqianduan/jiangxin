<?php 
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['isLogin'])) echo '已经登陆';
?>