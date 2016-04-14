<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/search_result.css" rel="stylesheet">
    <title>匠心传承</title>

</head>
<body>
    <div class="container">
        <!-- Header -->
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
        <div class="background">
            <div class="container">
                <!-- top products -->
                <div class="row top-products">
                    <div class="col-md-4">
                        <div class="hot-small">
                            <h4>黔韵太阳花</h4>
                            <div class="line"></div>
                            <div class="dis">
                                <p>苗乡拉丝工艺锻造</p>
                                <p>纯银吊坠</p>
                            </div>
                            <p class="price">$ 268.00</p>
                            <div class="row top-product-footer">
                                <div class="col-md-6">
                                    <img src="images/hot-small.png">
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-black">加入购物车</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-small">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-small">

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- search result -->
                <ul class="result-list">
                    <li>
                        <div class="result-item">
                            <h1>黔韵太阳花</h1>
                            <div class="line"></div>
                            <div class="dis">
                                <p>苗乡拉丝工艺锻造</p>
                                <p>纯银吊坠</p>
                            </div>
                            <p class="price">$ 268.00</p>
                            <div class="row top-product-footer">
                                <div class="col-md-6">
                                    <div id="myCarousel" class="carousel slide">
                               <!-- 轮播（Carousel）指标 -->
                               <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                              </ol>   
                              <!-- 轮播（Carousel）项目 -->
                              <div class="carousel-inner">
                                  <div class="item active">
                                      <img src="images/hot-1_03.png" alt="First slide">
                                  </div>
                                  <div class="item">
                                     <img src="images/hot-small.png" alt="Second slide">
                                 </div>
                                 <div class="item">
                                     <img src="images/hot-2_03.png" alt="Third slide">
                                 </div>
                             </div>
                             <!-- 轮播（Carousel）导航 -->
                             <a class="carousel-control left" href="#myCarousel" 
                             data-slide="prev">&lsaquo;</a>
                             <a class="carousel-control right" href="#myCarousel" 
                             data-slide="next">&rsaquo;</a>
                         </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-black">加入购物车</button>
                                    <button class="btn btn-grey">购买</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-group">
                    <li>
                        <div class="result-item">
                            <div class="col-md-6">
                             <!--  <img src="images/ygc1.png" alt="ygc" class="img-responsive"> -->
                             <div id="myCarousel0" class="carousel slide">
                               <!-- 轮播（Carousel）指标 -->
                               <ol class="carousel-indicators">
                                  <li data-target="#myCarousel0" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel0" data-slide-to="1"></li>
                                  <li data-target="#myCarousel0" data-slide-to="2"></li>
                              </ol>   
                              <!-- 轮播（Carousel）项目 -->
                              <div class="carousel-inner">
                                  <div class="item active">
                                      <img src="images/ygc1.png" alt="First slide">
                                  </div>
                                  <div class="item">
                                     <img src="images/ygc2.png" alt="Second slide">
                                 </div>
                                 <div class="item">
                                     <img src="images/ygc3.png" alt="Third slide">
                                 </div>
                             </div>
                             <!-- 轮播（Carousel）导航 -->
                             <a class="carousel-control left" href="#myCarousel0" 
                             data-slide="prev">&lsaquo;</a>
                             <a class="carousel-control right" href="#myCarousel0" 
                             data-slide="next">&rsaquo;</a>
                         </div>
                     </div>
                     <div class="col-md-6">
                        <h1>隋瑞宝</h1>
                        <div class="dash-line"></div>
                        <div class="buttons-list">
                            <button class="btn btn-black">详情介绍</button>
                            <button class="btn btn-grey">收藏</button>
                        </div>
                        <div class="item-intro"></div>
                    </div>

                </div>
            </li>
            <div class="clearfix"></div>
        </ul>
    </div>

</div>
<?php require('bottom.html');?>
</body>
</html>