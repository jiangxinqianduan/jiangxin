<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/search_product.css" rel="stylesheet">
    <title>匠心传承</title>
</head>
<body>
<?php require("header.php");?>
    <div class="row" style="background-color: black">
        <div class="col-md-3" style="margin-left: 10%">
            <div class="left-list">
                <div class="left-list-header">
                    <h3>所有商品</h3>
                </div>
                <ul class="left-list-body">
                    <li><a href="">首页</a> </li>
                    <li><a href="">一周新品</a> </li>
                    <li><a href="">品牌优选</a></li>
                    <li><a href="">我的收藏</a></li>
                    <li><a href="">我的订单</a></li>
                    <li><a href="">特色配饰</a></li>
                    <li><a href="">人气必备</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-5">
            <div class="big-search">
                <form>
                    <input type="text" name="product-search" class="big-search-box" title="" />
                    <input type="button" class="btn search-btn" value="搜索商品">
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 sections">
        <div class="title-box">
            <h3>匠心优选</h3>
        </div>
    </div>
    <div class="col-md-6 sections">
        <div class="title-box">
            <h3>匠心优选</h3>
        </div>
    </div>
    <div class="col-md-6 sections">
        <div class="title-box">
            <h3>匠心优选</h3>
        </div>
    </div>
    <div class="col-md-6 sections">
        <div class="title-box">
            <h3>匠心优选</h3>
        </div>
    </div>

    <div class="row">

    </div>

    <div class="row">
        <div class="col-md-6 big-section">
            <h2>新品</h2>
        </div>
        <div class="col-md-6 big-section">
            <h2>全部</h2>
        </div>
    </div>
<?php 
require('db.php');
    $con=DBconnect::getConnect();
    if( mysqli_connect_errno($con))echo '目前无法连接到数据库，请联系系统管理员。';
?>
<div class="row recommend">  
<?php    
    $result=mysqli_query($con,"SELECT g_id,g_name,g_pic,g_price FROM good ORDER BY g_sell DESC LIMIT 4");
    $i=0;
    while($row=mysqli_fetch_array($result))
    {
        if($i>3)break;
        ?>
        <div class="col-md-3">
            <img src="" class="small-product-img" />
            <p><?php echo $row['g_name'];?></p>
            <p class="price">￥<?php echo $row['g_price'];?></p>
            <a class="comment">(已有52人评价)</a>
        </div>
        <?php
    }
    mysqli_close($con);
 ?>
        
</div>

    <div class="row">
        <div class="col-md-6 big-section">
            <h2>匠心魂</h2>
        </div>
        <div class="col-md-6 big-section">
            <h2>枫秀染</h2>
        </div>
    </div>
    </div>
    <?php require('bottom.html'); ?>
</body>
    </html>