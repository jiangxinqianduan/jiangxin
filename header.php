<!-- Header -->
<?php
require('isLogin.php');
require('./db.php');
$con=dbConnect::getConnect();
$user="default";
if(isset($_SESSION['username']))$user=$_SESSION['username'];
?>
<div class="container">
    <div class="row">
        <div class="header">
            <div class="col-md-2">
                <a><img src="images/logo_03.png" class="logo"></a>
            </div>
            <div class="col-md-9">
                <div class="row top-bar">
                    <ul class="list-inline top-nav">
                        <li><img src="images/homelogo.png"/></li>
                        <li><a href="index.php">首页</a></li>
                        <?php 
                        if(!$isLogin)
                            echo '<li><a href="login.php">登陆</a></li>';
                        else
                            echo '<li>欢迎,<a href="person_center.php">'.$user.'</a>'
                            ?>
                        <li><a href=".logout.php">注销</a></li>
                        <li><a href="">帮助</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nav navbar-nav navbar">
                            <li><a href="index.html">
                                首页
                                <b class="caret"></b>
                            </a>
                        </li>
                        <li><a href="search_product.php">
                            商店
                            <b class="caret"></b>
                        </a>
                    </li>
                    <li><a href="person_center.php" class="dropdown-toggle" data-toggle="dropdown">
                        个人中心
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php 
                        if($isLogin)
                        {
                            ?>
                            <li><a href="person_center.php?type=cart">我的购物车</a></li>
                            <li><a href="person_center.php?type=havebuy">已买到的宝贝</a></li>
                            <li><a href="person_center.php?type=collect">我的收藏</a></li>
                            <li><a href="person_center.php?type=order">我的订单</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <li><a href="login.php">登录</a></li>
                            <li><a href="login.php">注册</a></li>
                            <?php 
                        }
                        ?>

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
        <a href="person_center.php?type=cart"><img src="images/cart_03.png" class="cart-logo"></a>
    </div>
</div>
</div>
</div>
<!-- Header End-->