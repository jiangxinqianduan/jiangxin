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
    </div>
</div>
<!-- Header End-->