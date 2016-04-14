<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/person_center.css">
    <link rel="stylesheet" type="text/css" href="./css/bottom.css">
    <title>匠心传承</title>
</head>
<body>
    <!-- Header -->
    <?php 
    require("header.php");
    
    if(!(isset($_SESSION['username'])&&isset($_SESSION['isLogin'])))
        header("Location:login.php");
    $user_id=$_SESSION['u_id'];
    ?>
    <div class="container-fluid">
        <div class="person_center_background">

            <!-- Header End-->

            <!-- Content -->
<?php 
$type="cart"; 
if(isset($_GET['type']))
{
    $type=$_GET['type'];
}
?>
            <div class="row content-structure text-center">
                <div class="col-md-2 text-center person-menu">
                    <table class="table table-hover menu-list">
                        <thead>
                            <tr>
                                <td>全部功能</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr <?php if($type=="cart") echo 'class="active"'; ?>>
                                <td>
                                    <a href="person_center.php?type=cart">我的购物车</a>
                                </td>
                            </tr>
                            <tr <?php if($type=="havebuy") echo 'class="active"'; ?>>
                                <td>
                                    <a href="person_center.php?type=havebuy">已买到的宝贝</a>
                                </td>
                            </tr>
                            
                            <tr <?php if($type=="cart") echo 'class="collect"'; ?>>
                                <td>
                                    <a href="person_center.php?type=collect">我的收藏</a>
                                </td>
                            </tr>
                            <tr <?php if($type=="order") echo 'class="active"'; ?>>
                                <td>
                                    <a href="person_center.php?type=order">我的订单</a>
                                </td>
                            </tr>
                            
                            
                            <tr <?php if($type=="evaluate") echo 'class="active"'; ?>>
                                <td>
                                    <a href="person_center.php?type=evaluate">我的评论</a>
                                </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
                <?php mysqli_query($con,"select u_money from user where u_id=$user_id and u)name=") ?>
                <div class="col-md-10 person-content">
                    <div class="row login">
                        <div class="col-md-4 text-center">
                            <img src="images/hot-1_03.png" alt="head_icon" class="img-circle">
                        </div>
                        
                        <div class="col-md-4 text-center">
                            <h3>我的余额:--</h3>
                            <h3>我的优惠券:--</h3>
                        </div>
                        <div class="col-md-4 text-center">
                            <h3>我的礼品</h3>
                            <a href=""><h4>请登录查看</h4></a>
                        </div>
                    </div>
                    <div class="row collect-header text-left">
                        <h3>我的收藏</h3>
                        <hr align="center" size="3px">
                    </div>
                    <div class="row collect-content text-left">
                       <ul class="list-inline collect-menu">
                        <li>分类筛选:</li>
                        <li><a href="">网站导航</a></li>
                        <li><a href="">买家中心</a></li>
                        <li><a href="">联系客服</a></li>
                        <li><a href="">帮助</a></li>
                    </ul>
                    <hr align="center" width="90%">
                    <ul class="list-inline collect-menu">
                        <li>分类筛选：</li>
                        <li><a href="">网站导航</a></li>
                        <li><a href="">买家中心</a></li>
                        <li><a href="">联系客服</a></li>
                        <li><a href="">帮助</a></li>
                    </ul>
                </div>
                <div class="row attribute">
                    <div class="col-md-6 text-center">
                        <h3>宝贝</h3>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>价格（元）</h3>
                    </div>
                </div>
                <div class="row collect-item">
                    <div class="row collect-item-header">
                        <div class="col-md-2 text-center">
                            <input type="checkbox"></input>
                            <label>取消收藏</label>
                        </div>
                        <div class="col-md-6 text-left">
                            <label>收藏时间：2013-01-01</label>
                        </div>
                    </div>
                    <div class="row collect-item-content">
                        <div class="col-md-2 text-center">
                            <img src="images/">
                        </div>
                        <div class="col-md-6 text-left">
                            <label>太阳花</label>
                            <label>商品货号：654654</label>
                        </div>
                        <div class="col-md-2 text-center">
                            <p>320</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <button type="button" class="btn btn-primary">加入购物车</button>
                            <h4>取消收藏</h4>
                        </div>
                    </div>
                </div>
                <div class="row collect-item">
                    <div class="row collect-item-header">
                        <div class="col-md-2 text-center">
                            <input type="checkbox"></input>
                            <label>取消收藏</label>
                        </div>
                        <div class="col-md-6 text-left">
                            <label>收藏时间：2013-01-01</label>
                        </div>
                    </div>
                    <div class="row collect-item-content">
                        <div class="col-md-2 text-center">
                            <img src="images/">
                        </div>
                        <div class="col-md-6 text-left">
                            <label>太阳花</label>
                            <label>商品货号：654654</label>
                        </div>
                        <div class="col-md-2 text-center">
                            <p>320</p>
                            <p>320</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <button type="button" class="btn btn-primary">加入购物车</button>
                            <h4>取消收藏</h4>
                        </div>
                    </div>
                </div>
                <div class="row collect-item">
                    <div class="row collect-item-header">
                        <div class="col-md-2 text-center">
                            <input type="checkbox"></input>
                            <label>取消收藏</label>
                        </div>
                        <div class="col-md-6 text-left">
                            <label>收藏时间：2013-01-01</label>
                        </div>
                    </div>
                    <div class="row collect-item-content">
                        <div class="col-md-2 text-center">
                            <img src="images/">
                        </div>
                        <div class="col-md-6 text-left">
                            <label>太阳花</label>
                            <label>商品货号：654654</label>
                        </div>
                        <div class="col-md-2 text-center">
                            <p>320</p>
                            <p>320</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <button type="button" class="btn btn-primary">加入购物车</button>
                            <h4>取消收藏</h4>
                        </div>
                    </div>
                </div>
                <div class="row collect-item">
                    <div class="row collect-item-header">
                        <div class="col-md-2 text-center">
                            <input type="checkbox"></input>
                            <label>取消收藏</label>
                        </div>
                        <div class="col-md-6 text-left">
                            <label>收藏时间：2013-01-01</label>
                        </div>
                    </div>
                    <div class="row collect-item-content">
                        <div class="col-md-2 text-center">
                            <img src="images/">
                        </div>
                        <div class="col-md-6 text-left">
                            <label>太阳花</label>
                            <br><br><br>
                            <label>商品货号：654654</label>
                        </div>
                        <div class="col-md-2 text-center">
                            <p>320</p>
                            <p>320</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <button type="button" class="btn btn-primary">加入购物车</button>
                            <h4>取消收藏</h4>
                        </div>
                    </div>                 
                </div>
                <div class="row page">
                    <div class="col-md-2 text-center">
                        <input type="checkbox"></input>
                        <label>全选</label>
                    </div>
                    <div class="col-md-3 text-left">
                        <button type="button" class="btn btn-default">取消收藏</button>
                    </div>
                    <div class="col-md-4 text-center">
                        <ul class="page-item list-inline">
                            <li style="margin-right:4px">
                                <a href="">上一页</a>
                            </li>
                            <li>
                                <a href="">1</a>
                            </li>
                            <li>
                                <a href="">2</a>
                            </li>
                            <li>
                                <a href="">3</a>
                            </li>
                            <li>
                                <a href="">4</a>
                            </li>
                            <li>
                                <a href="">5</a>
                            </li>
                            <li>...</li>
                            <li style="margin-left:10px">
                                <a href="">下一页</a>
                            </li>
                            <label style="margin-left: 6px">共10页</label>
                        </ul>

                    </div>
                    <div class="col-md-3">
                        <span>到第</span>
                        <input type="number" value="1" min="1" max="100"></input>
                        <span>页</span>
                        <button>确定</button>
                    </div>
                </div>
                <div class="row proposal-header text-left">
                    <h3>猜你喜欢</h3>
                </div>
                <hr>
                <div class="row proposal-content text-center">
                 <div class="col-md-3 text-center">
                    <article class="proposal-main-content">
                        <img src="images/feature-1_03.png" alt="feature1">
                        <a href=""><h4 class="proposal-name">uktuktukukukuy</h4></a>    
                        <br>       
                        <h4 class="proposal-price">$6.50</h4>
                        <a href=""><h4 class="proposal-people">(已有56人评价）</h4></a>
                    </article>
                </div>  
                <div class="col-md-3 text-center">
                    <article class="proposal-main-content">
                        <img src="images/feature-1_03.png" alt="feature1">
                        <a href=""><h4 class="proposal-name">uktuktukukukuy</h4></a>    
                        <br>       
                        <h4 class="proposal-price">$6.50</h4>
                        <a href=""><h4 class="proposal-people">(已有56人评价）</h4></a>
                    </article>
                </div>  
                <div class="col-md-3 text-center">
                    <article class="proposal-main-content">
                        <img src="images/feature-1_03.png" alt="feature1">
                        <a href=""><h4 class="proposal-name">uktuktukukukuy</h4></a>    
                        <br>       
                        <h4 class="proposal-price">$6.50</h4>
                        <a href=""><h4 class="proposal-people">(已有56人评价）</h4></a>
                    </article>
                </div>  
                <div class="col-md-3 text-center">
                    <article class="proposal-main-content">
                        <img src="images/feature-1_03.png" alt="feature1">
                        <a href=""><h4 class="proposal-name">uktuktukukukuy</h4></a>    
                        <br>       
                        <h4 class="proposal-price">$6.50</h4>
                        <a href=""><h4 class="proposal-people">(已有56人评价)</h4></a>
                    </article>
                </div>  
            </div>
        </div>
    </div>
</div>


</div>

<!-- Content end-->
</div>

<?php require("bottom.php");?>
</body>
</html>
