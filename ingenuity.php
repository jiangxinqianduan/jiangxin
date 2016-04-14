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
	require("header.php");
	if(!isset($_GET['cid']))header("Location:index.php");
	$craftman=$_GET['cid'];

	?>
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
		
		<?php require('bottom.html'); ?>
	</div>
	</body>
	</html>