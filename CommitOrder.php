<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/buy.css">
    <link rel="stylesheet" type="text/css" href="./css/bottom.css">
    <title>匠心传承</title>
</head>
<body>
    <!-- Header -->
    
    <?php 
    require("header.php");
$g_id=$_GET['g_id'];
    ?>

    <!-- Header End-->

    <!-- Content -->
    <div class="container-fluid">
        <div class="content-background">
            <div class="container">
            <form action=".submitOrder.php" method="post">
                <div class="row address-header">
                    <div class="col-md-2 text-left">
                        <h4>确认收货地址</h4>
                    </div>
                    <div class="col-md-2 col-md-offset-8 text-right">
                        <a href="address_manager.php"><h4>管理我的收货地址</h4></a>
                    </div>
                </div>
                <div class="row address-content text-left">
                    <ul class="address-list">
                        <?php 
                        $result=mysqli_query($con,"select * from address where u_name='".$user."';");
                        while($row=mysqli_fetch_array($result))
                        {
                            $address=$row['a_city'].$row['a_detail'];
                            ?>
                            <li>
                                <div>
                                    <input type="radio" name="address" value="<?php echo $row['a_id'];?>">
                                    <label for=""><?php echo $address;?><em><?php echo $row['a_phone'];?></em></label>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                        <li>
                            <div class="other-address">
                                <a href=""><label>使用其他地址</label></a>
                            </div>
                        </li>
                    </ul>
                    <div class="new-address">
                        <a href="address_manager.php"><button class="button btn-default">使用新地址</button></a>
                    </div>
                </div>


                <div class="row buy-order-header text-left">
                    <h4>确认订单信息</h4>
                </div>
                <div class="row buy-order-topic text-center">
                    <div class="col-md-6 topic-header">
                        <h4>匠心宝贝</h4>
                    </div>
                    <div class="col-md-2 topic-header">
                        <h4>单价（元）</h4>
                    </div>
                    <div class="col-md-2 topic-header">
                        <h4>数量</h4>
                    </div>
                    <div class="col-md-2 topic-header">
                        <h4>小计</h4>
                    </div>
                </div>
                <?php 
                $result=mysqli_query($con,"select * from good where g_id=$g_id");
                $row=mysqli_fetch_array($result);
                 ?>
                <div class="row buy-order-content text-center">
                    <div class="col-md-1">
                        <img src="<?php echo $row['g_pic'];?>">
                    </div>
                    <div class="col-md-5">
                        <a href="product_identity.php?g_id=<?php echo $g_id;?>"><h4>苗族银饰</h4></a>
                    </div>
                    <div class="col-md-2">
                        <h4><?php echo $row['g_price'];?></h4>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="num" value="1" min="1" max="100">
                    </div>
                    <div class="col-md-2">
                        <h4>68.00</h4>
                    </div>
                </div>  
                <div class="row recommend">
                    <div class="col-md-6 advice">
                    <input type="hidden" name="g_id" value="<?php echo $g_id;?>">
                        <label>特殊需求留言：</label>
                        <textarea name="message"></textarea>
                    </div>
                    <div class="col-md-6 transport">
                        <h4>运送方式：   快递     6.00</h4>
                    </div>
                </div>
                <div class="row total-money text-right">
                    <div class="col-md-2 col-md-offset-8">
                        <label>店铺合计（含运费）</label>
                    </div>
                    <div class="col-md-2">
                        <label>74.00</label>
                    </div>
                </div>
                <div class="row submit-order text-right">
                    <div class="col-md-6 col-md-offset-6 submit-order-content">
                        <div class="row pay">
                            <label>实付款：<label>72.00</label></label>
                        </div>
                        <div class="row post">
                            <label>寄送至：<label>上海市中山北路3663号华东师范大学</label></label>
                        </div>
                        <div class="row receive">
                            <label>收货人：<label>谢斌</label><label>13917829004</label></label>
                        </div>
                    </div>
                </div>
                <div class="row submit-button text-right">
                    <button class="btn btn-red">提交订单</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php require('bottom.php');?>
</body>
</html>
