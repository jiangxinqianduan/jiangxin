<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/product_identity.css" rel="stylesheet">
    <title>匠心传承</title>

</head>
<body>
<?php 
require("header.php");
$g_id;
if(isset($_GET['g_id']))
{
    $g_id=$_GET['g_id'];
}
$result=mysqli_query($con,"select * from good where g_id=".$g_id);
$row=mysqli_fetch_array($result);
?>
        <!-- Header End-->
    <div class="background">
        <div class="result-item row">
            <h1><?php echo $row['g_name'];?></h1>
            <div class="row top-product-footer">
                <div class="col-md-6">
                    <img src="images/product1.jpg" style="margin-bottom: 20px"/>
                </div>
                <div class="col-md-6 btn-row dis">     
                    <h2><?php echo $row['g_des'];?></h2>
                    <p><?php echo $row['g_note'];?></p>
                    <p class="price">￥<?php echo $row['g_price'];?></p>
                    <a class="btn btn-red" href=".addToCart.php?g_id=<?php echo $g_id;?>">加入购物车</a>
                    <a class="btn btn-orange">购买</a>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav navbar-nav navbar nav-bar">
        <li class="active"><a href="#">商品详情</a></li>
        <li><a href="#">手艺人</a></li>
        <li><a href="#">文化背景</a></li>
        <li><a href="#">制作过程</a></li>
        <li><a href="#">留言板</a></li>
    </ul>
    <div class="row text-center">
        <div class="col-md-6">
            <img src="">
        </div>
        <div class="col-md-6">
            <p></p>
        </div>
    </div>
    <?php require("bottom.php");?>
</body>
</html>
