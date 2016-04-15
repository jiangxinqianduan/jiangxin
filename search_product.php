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
<!--     <div class="row">
        <div class="header">
            <div class="col-md-2">
                <a><img src="images/logo_03.png" class="logo"></a>
            </div>
            <div class="col-md-9">
                <div class="row top-bar">
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
                            <input type="text" name="search" class="searchBox" title=""/>
                            <input type="image" src="images/search_03.png" class="searchIcon"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <img src="images/cart_03.png" class="cart-logo">
            </div>
        </div>
    </div> -->
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
                <form>
                    <input type="text" name="product-search" class="big-search-box" title="" />
                    <input type="button" class="btn search-btn" value="搜索商品">
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
        <div class="col-md-2"><h1>Search Result</h1></div>
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
        $result=mysqli_query($con,"select * from good where g_name like '%".$filter."' or g_des like '%".$filter."'");
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
                <h3><?php echo $row['g_name']; ?></h3>
                <div class="row top-product-footer">
                    <div class="col-md-6">
                        <img src="<?php echo $row['g_pic']; ?>" class="product-img"/>
                    </div>
                    <div class="col-md-6 btn-row dis">
                        <a class="btn btn-black" href="product_identity.php?g_id=<?php echo $row['g_id'];?>">查看详情</a>
                        <a class="btn btn-grey" href=".addToCart.php?g_id=<?php echo $row['g_id'];?>">加入购物车</a>
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
<!--     <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul> -->
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