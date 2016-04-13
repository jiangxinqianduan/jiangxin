<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>手艺人</title>
	<link rel="stylesheet" type="text/css" href="./css/ingenuity.css">
	<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<!-- Header -->
	<?php
	require('isLogin.php');
	require('./db.php');
	$con=dbConnect::getConnect();
	$user=$_SESSION['username'];
	if(!isset($_GET['cid']))header("Location:index.php");
	$craftman=$_GET['cid'];

	?>
	<div class="row">
		<div class="header">
			<div class="col-md-2">
				<a><img src="images/logo_03.png" class="logo"></a>
			</div>
			<div class="col-md-9">
				<div class="top-bar">
					<ul class="list-inline top-nav">
						<li><img src="images/homelogo.png"/></li>
						<li><a href="">网站导航</a></li>
						<li><a href="">买家中心</a></li>
						<li><a href="">联系客服</a></li>
						<li><a href="">帮助</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-9">
						<ul class="nav navbar-nav navbar">
							<li><a href="index.html" class="dropdown-toggle" data-toggle="dropdown">
								首页
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.html">Featured Items</a></li>
								<li><a href="">Latest Items</a></li>
							</ul></li>
							<li><a href="" class="dropdown-toggle" data-toggle="dropdown">
								商店
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="">Featured Items</a></li>
								<li><a href="">Latest Items</a></li>
							</ul></li>
							<li><a href="" class="dropdown-toggle" data-toggle="dropdown">
								个人中心
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="">登录</a></li>
								<li><a href="">注册</a></li>
							</ul></li>
							<li><a href="" class="dropdown-toggle" data-toggle="dropdown">
								商品分类
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="">蜡染</a></li>
								<li><a href="">银饰</a></li>
							</ul></li>
						</ul>
					</div>
					<div class="col-md-3 search">
						<form>
							<input type="text" name="search" class="searchBox"/>
							<input type="image" src="images/search_03.png" class="searchIcon"/>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-1">
				<img src="images/cart_03.png" class="cart-logo">
			</div>
		</div>
	</div>
	<!-- Header End-->
	<div class="container ingenuity-background">
	<?php 
$result=mysqli_query($con,"select i_img,i_text from information where c_id='".$craftman."' order by i_id asc");
$i=0;
while($row=mysqli_fetch_array($result))
{
	if($i%2==0)
	{
		?>
		<div class="row information-block">
			<div class="col-md-6"><img src="<?php echo $row['i_img']; ?>" alt="image" class="img-responsive"></div>
			<div class="col-md-6">
				<div class="information-text">
					<p><?php echo nl2br($row['i_text']); ?></p>
				</div>
			</div>

		</div>
		<?php
	}
	else
	{
		?>
		<div class="row information-block">

			<div class="col-md-6 col-md-push-6"><img src="<?php echo $row['i_img']; ?>" alt="image" class="img-responsive"></div>
			<div class="col-md-6 col-md-pull-6">
				<div class="information-text">
					<p><?php echo nl2br($row['i_text']); ?></p>
				</div>
			</div>
		</div>
		<?php
	}
}
	 ?>
		
		<div class="footer"></div>
	</div>
	</body>
	</html>