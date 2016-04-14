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
    $result=mysqli_query($con,"select u_id,u_money from user where u_name='".$user."'");
    $row=mysqli_fetch_array($result);
    $user_id=$row['u_id'];
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
<!--                             <tr <?php if($type=="order") echo 'class="active"'; ?>>
                                <td>
                                    <a href="person_center.php?type=order">我的订单</a>
                                </td>
                            </tr> -->
                            
                            
                            <tr <?php if($type=="evaluate") echo 'class="active"'; ?>>
                                <td>
                                    <a href="person_center.php?type=evaluate">我的评论</a>
                                </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10 person-content">
                    <div class="row login">
                        <div class="col-md-4 text-center">
                            <img src="images/hot-1_03.png" alt="head_icon" class="img-circle">
                        </div>
                        
                        <div class="col-md-4 text-center">
                            <h3>我的余额:￥<?php echo $row['u_money'];?></h3>
                            <h3>我的优惠券:--</h3>
                        </div>
                        <div class="col-md-4 text-center">
                            <h3>我的礼品</h3>
                            <a href=""><h4></h4></a>
                        </div>
                    </div>
                    <div class="row collect-header text-left">
                        <h3><?php 
                            if($type=="collect")
                            {
                                echo "我的收藏";
                            }
                            elseif ($type=="cart") {
                                echo "我的购物车";
                            }
                            elseif($type="havebuy")
                            {
                                echo "我买到的宝贝";
                            }
                            else
                            {
                                echo "我的评论";
                            }

                            ?></h3>
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
                    <?php 
                    if($type=="collect")
                    {
                        $result=mysqli_query($con,"select g_id,g_pic,p_price,g_name,c_time from good join collection using(g_id) where u_name='".$user."';");
                        if($result)
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                                <div class="row collect-item">
                                    <div class="row collect-item-header">
                                        <div class="col-md-2 text-center">
                                            <input type="checkbox"></input>
                                            <label>取消收藏</label>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <label>收藏时间：<?php echo $row['c_time']; ?></label>
                                        </div>
                                    </div>
                                    <div class="row collect-item-content">
                                        <div class="col-md-2 text-center">
                                            <img src="<?php echo $row['g_pic'];?>">
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <label><?php $row['g_name'];?></label>
                                            <label>商品货号：<?php $row['g_id'];?></label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <p><?php echo $row['g_price'];?></p>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <button type="button" class="btn btn-primary">加入购物车</button>
                                            <h4>取消收藏</h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        elseif ($type=="cart") {
                            $result=mysqli_query($con,"select g_id,g_pic,p_price,g_name,c_time from good join cart using(g_id) where u_name='".$user."';");
                            if($result)
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                                <div class="row collect-item">
                                    <div class="row collect-item-header">
                                        <div class="col-md-2 text-center">
                                            <input type="checkbox"></input>
                                            <label>移出购物车</label>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <label>加入购物车时间：<?php echo $row['cart_time']; ?></label>
                                        </div>
                                    </div>
                                    <div class="row collect-item-content">
                                        <div class="col-md-2 text-center">
                                            <img src="<?php echo $row['g_pic'];?>">
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <label><?php $row['g_name'];?></label>
                                            <label>商品货号：<?php $row['g_id'];?></label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <p><?php echo $row['g_price'];?></p>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <button type="button" class="btn btn-primary">购买</button>
                                            <h4>移出购物车</h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        elseif($type="order")
                        {
                            $result=mysqli_query($con,"select o_id,g_id,g_pic,p_price,g_name,o_time from good join good_order using(g_id) where u_name='".$user."';");
                            if($result)
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                                <div class="row collect-item">
                                    <div class="row collect-item-header">
                                        <div class="col-md-2 text-center">
                                            <label>订单编号：</label><span><?php echo $row['o_id'];?></span>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <label>下单时间：<?php echo $row['o_time']; ?></label>
                                        </div>
                                    </div>
                                    <div class="row collect-item-content">
                                        <div class="col-md-2 text-center">
                                            <img src="<?php echo $row['g_pic'];?>">
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <label><?php $row['g_name'];?></label>
                                            <label>商品货号：<?php $row['g_id'];?></label>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <p><?php echo $row['g_price'];?></p>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <button type="button" class="btn btn-primary">查看商品</button>
                                            <h4>取消商品</h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo "我的评论";
                        }

                        ?>
                    </div>
                </div>
                <div class="row proposal-header text-left">
                    <h3>猜你喜欢</h3>
                </div>
                <hr>

                <div class="row proposal-content text-center">
                    <?php 
                    $result=mysqli_query($con,"select g_pic,g_name,g_price,g_sell from good limit 4");
                    while($row=mysqli_fetch_array($result))
                    {
                        ?>
                        <div class="col-md-3 text-center">
                            <article class="proposal-main-content">
                                <img src="<?php echo $row['g_pic'];?>" alt="feature1">
                                <a href=""><h4 class="proposal-name"><?php echo $row['g_name'];?></h4></a>    
                                <br>       
                                <h4 class="proposal-price">￥<?php echo $row['g_price'];?></h4>
                                <a href=""><h4 class="proposal-people">(已有<?php echo $row['g_sell']; ?>人购买）</h4></a>
                            </article>
                        </div>
                        <?php
                    }
                    ?>  
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
