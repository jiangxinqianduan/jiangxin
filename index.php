<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>匠心传承</title>
</head>
<body>
    <!-- Header -->
    <?php
    require('isLogin.php');
    require_once('db.php');
    $con=getConnect();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a><img src="images/logo_03.png" class="header-logo" alt="logo"></a>
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
                            </ul>
                        </li>
                        <li><a href="" class="dropdown-toggle" data-toggle="dropdown">
                            商店
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">Featured Items</a></li>
                            <li><a href="">Latest Items</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="dropdown-toggle" data-toggle="dropdown">
                        个人中心
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">登录</a></li>
                        <li><a href="">注册</a></li>
                    </ul>
                </li>
                <li><a href="" class="dropdown-toggle" data-toggle="dropdown">
                    商品分类
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="">蜡染</a></li>
                    <li><a href="">银饰</a></li>
                </ul>
            </li>
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
</div>

<div class="container-fluid">
    <div class="row text-center">
        <div class="header-background">
            <img src="images/hugescreen_03.png" alt="header-background">
        </div>
    </div>
</div>
<!-- Header End-->

<!-- Content -->
<div class="container-fluid">
    <div class="content-background">
        <div class="container">
            <div class="row content-hot">
                <div class="col-md-4 text-center">
                   <img src="images/hot-1_03.png" alt="hot1">
               </div>
               <div class="col-md-4 text-center">
                <img src="images/hot-2_03.png" alt="hot2">
            </div>
            <div class="col-md-4 text-center">
                <img src="images/hot-3_03.png" alt="hot3">
            </div>
        </div>

        
        <div class="row topic">
            <div class="col-md-4 text-center line">
            </div>
            <div class="col-md-4 text-center">
                <h1>FEATURED &nbsp ITEMS</h1>
            </div>
            <div class="col-md-4 text-center line">
            </div>
        </div>
<?php 
$result=mysqli_query($con,"select g_pic,g_des,g_price,g_name from good limit 4");
?>
        <div class = "row">
        <?php for($i=0;$i<4;$i++){
            $row=mysqli_fetch_array($result);
            ?><div class="col-md-3 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#"><?php echo $row['g_name'];?></a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src=<?php echo '"images/'.$row['g_pic'].'"';?> alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4><?php echo $row['g_des']; ?></h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">￥<?php echo $row['g_price']; ?></h2>
                </article>
            </div>  
            
            } ?>
            
            
        </div>
        
        <div class="row topic">
            <div class="col-md-4 text-center line">
            </div>
            <div class="col-md-4 text-center">
                <h1>LATEST &nbsp ITEMS</h1>
            </div>
            <div class="col-md-4 text-center line">
            </div>
        </div>

        <div class = "row">
            <div class="col-md-3 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>  
            <div class="col-md-3 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>
            <div class="col-md-3 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>
            <div class="col-md-3 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>
        </div>

        <div class="row theme">
            <article class="theme-content">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="theme-name">OXYGEN-ECOMMENT THEME</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <button type="button" class="btn btn-default theme-button">theme</button>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="theme-introduction">laklsdalsflaskfal</h4>
                    </div>
                </div> 
            </article>
        </div>

        <div class="row accessories">
            <div class="col-md-3 text-center">
                <img src="images/hot-1_03.png" alt="accessories1">
            </div>
            <div class="col-md-3 text-center">
                <img src="images/hot-1_03.png" alt="accessories1">
            </div>
            <div class="col-md-3 text-center">
                <img src="images/hot-1_03.png" alt="accessories1">
            </div>
            <div class="col-md-3 text-center">
                <img src="images/hot-1_03.png" alt="accessories1">
            </div>
        </div>

        <div class="row topic">
            <div class="col-md-4 text-center line">
            </div>
            <div class="col-md-4 text-center">
                <h1>FEATURED &nbsp ITEMS</h1>
            </div>
            <div class="col-md-4 text-center line">
            </div>
        </div>

        <div class = "row">
            <div class="col-md-4 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>
            <div class="col-md-4 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>
            <div class="col-md-4 text-center">
                <article class="main-content">
                    <img src="images/feature-1_03.png" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#">牙舟陶</a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="images/grayheart.png" alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4>苗族饰物</h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">$6.50</h2>
                </article>
            </div>  
        </div>

        <div class="row random-products">
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>Random Products</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item1</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item2</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item3</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>Random Products</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item1</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item2</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item3</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>Random Products</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item1</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item2</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item3</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>Random Products</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item1</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item2</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">item3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Content end-->

<!-- Footer -->
<div class="container-fluid">
    <div class="footer-background">
        <div class="container">
            <div class="row footer-information">
                <div class="col-md-4">
                    <ul class="footer-contact">
                        <li><h3>Contact us</h3></li>
                        <li><h3>Viahbckajsdaj</h3></li>
                        <li><h3>sdfsdfssdvsd</h3></li>
                        <li><a href="#"><h3>dsvfsdvsdv</a></h3></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="footer-contact">
                        <li><h3>Contact us</h3></li>
                        <li><h3>Viahbckajsdaj</h3></li>
                        <li><h3>sdfsdfssdvsd</h3></li>
                        <li><a href="#"><h3>dsvfsdvsdv</a></h3></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="footer-contact">
                        <li><h3>Contact us</h3></li>
                        <li><h3>Viahbckajsdaj</h3></li>
                        <li><h3>sdfsdfssdvsd</h3></li>
                        <li><a href="#"><h3>dsvfsdvsdv</a></h3></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="footer-contact">
                        <li><h3>Contact us</h3></li>
                        <li><h3>Viahbckajsdaj</h3></li>
                        <li><h3>sdfsdfssdvsd</h3></li>
                        <li><a href="#"><h3>dsvfsdvsdv</a></h3></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="footer-contact">
                        <li><h3>Contact us</h3></li>
                        <li><h3>Viahbckajsdaj</h3></li>
                        <li><h3>sdfsdfssdvsd</h3></li>
                        <li><a href="#"><h3>dsvfsdvsdv</a></h3></li>
                    </ul>
                </div>
            </div>
            <div class="row other">
                <div class="col-md-4">
                    <h3>copyright</h3>
                    <h3>madebyxb</h3>
                </div>
                <div class="col-md-4 col-xs-offset-4">
                    <h3>follow us on</h3>
                    <hr align="center">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>