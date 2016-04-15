<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/search_product.css" rel="stylesheet">
    <title>匠心传承</title>
</head>
<body>
    <!-- Header -->
    <?php require('header.php');?>
    <div  style="background-image: url('images/handbg.jpg'); background-size: cover">

    <!-- Header End-->
    <div class="row">
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
                <form action="search_product.php" method="get">
                    <input type="text" name="filter" class="big-search-box" title="" />
                    <input type="submit" class="btn search-btn" value="搜索商品">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 sections" style="background-image: url('images/youxuan2.jpg');background-size:cover; ">
        <div class="title-box">
            <h2>匠心优选</h2>
        </div>
    </div>
    <div class="col-md-6 sections" style="background-image: url('images/youxuan1.jpg');background-size:cover; ">
        <div class="title-box">
            <h2>苗族扎染</h2>
        </div>
    </div>
</div>

<div class="row" style="background-image: url('images/bg.png'); background-size: cover;text-align: center">
    <div class="row">
        <div class="col-md-5 title-line"></div>
        <div class="col-md-2"><h1>查询结果</h1></div>
        <div class="col-md-5 title-line"></div>
    </div>
    <?php 
    $filter="all";
    if(isset($_GET['filter'])){
        $filter=$_GET['filter'];
    }
    $result;
    if($filter=="all")
        $result=mysqli_query($con,"select * from good limit 8");
    else
    {
        $result=mysqli_query($con,"select * from good where g_name like '%".$filter."%' or g_des like '%".$filter."%'");
    }
    ?>
    <ul class="product-list">
    <?php
    $i=0;
    while($row=mysqli_fetch_array($result))
    {
        if($i++>=8)break;
        ?>
        <li>
            <div class="product">
                <h3 class="product-name"><?php echo $row['g_name']; ?></h3>
                <div class="row top-product-footer">
                    <div class="col-md-6">
                        <img src="<?php echo $row['g_pic']; ?>" class="product-img"/>
                    </div>
                    <div class="col-md-6 btn-row dis">
                        <a class="btn btn-red" href="product_identity.php?g_id=<?php echo $row['g_id'];?>">查看详情</a>
                        <a class="btn btn-orange" href=".addToCart.php?g_id=<?php echo $row['g_id'];?>">加入购物车</a>
                        <p><?php echo $row['g_des']; ?></p>
                        <p><?php echo $row['g_note']; ?></p>
                        <p class="price">￥<?php echo $row['g_price'];?></p>
                    </div>
                </div>
            </div>
        </li>
        <?php
    }
    ?>
        

    </ul>
    <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-6 big-section" style="background-image: url('images/xinpin.jpg');background-size:cover; ">
        <h2>新品</h2>
    </div>
    <div class="col-md-6 big-section" style="background-image: url('images/quanbu.jpg');background-size:cover; ">
        <h2>全部</h2>
    </div>
</div>

<div class="row recommend">
    <div class="col-md-3 recommend-item">
        <img src="images/small-product1.jpg" class="small-product-img" />
        <p>银簪 苗族银饰</p>
        <p class="price">￥138.95</p>
        <a class="comment">(已有52人评价)</a>
    </div>
    <div class="col-md-3 recommend-item">
        <img src="images/small-product2.jpg" class="small-product-img" />
        <p>银簪 苗族银饰</p>
        <p class="price">￥138.95</p>
        <a class="comment">(已有52人评价)</a>
    </div>
    <div class="col-md-3 recommend-item">
        <img src="images/small-product3.jpg" class="small-product-img" />
        <p>银簪 苗族银饰</p>
        <p class="price">￥138.95</p>
        <a class="comment">(已有52人评价)</a>
    </div>
    <div class="col-md-3 recommend-item">
        <img src="images/small-product4.jpg" class="small-product-img" />
        <p>银簪 苗族银饰</p>
        <p class="price">￥138.95</p>
        <a class="comment">(已有52人评价)</a>
    </div>
</div>

<div class="row">
    <div class="col-md-6 big-section" style="background-image: url('images/jiangxinhun.jpg');background-size: cover">
        <h2>匠心魂</h2>
    </div>
    <div class="col-md-6 big-section" style="background-image: url('images/fengxiangran.jpg');background-size: cover">
        <h2>枫秀染</h2>
    </div>
</div>
<?php require('bottom.php');?> 
</body>
</html>