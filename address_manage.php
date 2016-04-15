<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/address_manage.css">
    <link rel="stylesheet" type="text/css" href="css/bottom.css">
    <title>Title</title>
</head>
<body>
    <?php require("header.php");?>
    <div class="container">
        <div class="row title">
            <h3>管理收货地址</h3>
        </div>
        <div class="row input-row">
            <h4>新增地址</h4>
            <form action=".newAddr.php" method="post">
                <input name="name" type="text" title="" placeholder="姓名" style="width: 100px"/>
                <input name="phone" type="text" title="" placeholder="电话号码" style="width: 200px">
                <input name="city" type="text" title="" placeholder="城市" style="width: 100px"/>
                <input name="detail" type="text" title="" placeholder="详细地址" style="width: 200px"/>
                <input type="submit" class="btn btn-default" value="新增"/>
            </form>
        </div>

        <?php 
        $result=mysqli_query($con,"select * from address where u_name='".$user."';")
        ?>
        <ul class="address-list">
        <?php 
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <li><div class="row">
                <p class="name-and-phone"><?php echo $row['a_name'];?></p>
                <p><?php echo $row['a_phone'];?></p>
                <p><?php echo $row['a_city'];?></p>
                <p><?php echo $row['a_detail'];?></p>
                <a href=".delAddr.php?addr=<?php echo $row['a_id'];?>">删除地址</a>
            </div></li>
            <?php 
        }
             ?>
        </ul>
    </div>
    <?php require("bottom.php");?>
</body>
</html>