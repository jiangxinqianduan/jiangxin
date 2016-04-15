<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/bottom.css">
    <title>匠心传承</title>
</head>
<body>
<?php require("header.php");?>
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
                <h1>特色 &nbsp 手工艺品</h1>
            </div>
            <div class="col-md-4 text-center line">
            </div>
        </div>
        <?php 
        $result=mysqli_query($con,"select g_id,g_pic,g_des,g_price,g_name from good order by g_sell limit 4");
        ?>
        <div class = "row">
            <?php for($i=0;$i<4;$i++){
                $row=mysqli_fetch_array($result);
                ?><div class="col-md-3 text-center">
                <article class="main-content">
                    <img src="<?php echo $row['g_pic']; ?>" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#"><?php echo $row['g_name'];?></a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src=
                            <?php 
                            $res=mysqli_query($con,"select * from collection where u_name='$user' and g_id='".$row['g_id']."'");
                            if(mysqli_num_rows($res)==0)
                            {
                                echo '"images/greyheart.PNG"';
                            }
                            else
                            {
                                echo '"images/redheart.PNG"';
                            }
                            ?> alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4><?php echo $row['g_des']; ?></h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">￥<?php echo $row['g_price']; ?></h2>
                </article>
            </div>  
            <?php   
        } 
        ?>


    </div>

    <div class="row topic">
        <div class="col-md-4 text-center line">
        </div>
        <div class="col-md-4 text-center">
            <h1>最新 &nbsp 手工艺品</h1>
        </div>
        <div class="col-md-4 text-center line">
        </div>
    </div>

    <?php 
    $result=mysqli_query($con,"select g_id,g_pic,g_des,g_price,g_name from good order by g_date limit 4");
    ?>
    <div class = "row">
        <?php for($i=0;$i<4;$i++){
            $row=mysqli_fetch_array($result);
            ?><div class="col-md-3 text-center">
            <article class="main-content">
                <img src="<?php echo $row['g_pic']; ?>" alt="feature1">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h3 class="name"><a href="#"><?php echo $row['g_name'];?></a></h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src=
                        <?php 
                        $res=mysqli_query($con,"select * from collection where u_name='$user' and g_id='".$row['g_id']."'");
                        if(mysqli_num_rows($res)==0)
                        {
                            echo '"images/greyheart.png"';
                        }
                        else
                        {
                            echo '"images/redheart.png"';
                        }
                        ?> alt="heart" class="picture">
                    </div>
                </div>
                <div class="row text-left introduction">
                    <h4><?php echo $row['g_des']; ?></h4>
                </div>
                <hr align="center" width="80%">
                <h2 class="price">￥<?php echo $row['g_price']; ?></h2>
            </article>
        </div>  
        <?php   
    } 
    ?>
    </div>
    <div class="row theme">
        <article class="theme-content">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="theme-name">美物分享：留住春意盎然</h3>
                </div>
                <div class="col-md-4 text-right">
                    <button type="button" class="btn btn-default theme-button">theme</button>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h4 class="theme-introduction">草树知春不久归，百般红紫斗芳菲。春将归去，我们又该怎样留住春意盎然？匠心借春日美物，为你找到答案。</h4>
                </div>
            </div> 
        </article>
    </div>

    <div class="row accessories">
        <div class="col-md-3 text-center">
            <img src="images/1.png" alt="accessories1">
        </div>
        <div class="col-md-3 text-center">
            <img src="images/2.png" alt="accessories1">
        </div>
        <div class="col-md-3 text-center">
            <img src="images/3.png" alt="accessories1">
        </div>
        <div class="col-md-3 text-center">
            <img src="images/4.png" alt="accessories1">
        </div>
    </div>

    <div class="row topic">
        <div class="col-md-4 text-center line">
        </div>
        <div class="col-md-4 text-center">
            <h1>最热 &nbsp 手工艺品</h1>
        </div>
        <div class="col-md-4 text-center line">
        </div>
    </div>
    <?php 
    $result=mysqli_query($con,"select g_id,g_pic,g_des,g_price,g_name from good limit 3");
    ?>

    <div class = "row">
        <?php for($i=0;$i<3;$i++){
            $row=mysqli_fetch_array($result);
            ?>
            <div class="col-md-4 text-center">
                <article class="main-content">
                    <img src="<?php echo $row['g_pic']; ?>" alt="feature1">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h3 class="name"><a href="#"><?php echo $row['g_name'];?></a></h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src=<?php 
                            $res=mysqli_query($con,"select * from collection where u_name='$user' and g_id='".$row['g_id']."'");
                            if(mysqli_num_rows($res)==0)
                            {
                                echo '"images/greyheart.png"';
                            }
                            else
                            {
                                echo '"images/redheart.png"';
                            }
                            ?> alt="heart" class="picture">
                        </div>
                    </div>
                    <div class="row text-left introduction">
                        <h4><?php echo $row['g_des']; ?></h4>
                    </div>
                    <hr align="center" width="80%">
                    <h2 class="price">￥<?php echo $row['g_price']; ?></h2>
                </article>
            </div>  
            <?php   
        } 
        ?>
        </div>

       <div class="row random-products">
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>寸彦同</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">磨砂一体壶</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">锤痕一体壶</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">仿古一体壶</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>张彩敬</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">烟壶小晶</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">内画茶壶</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">内画鼻烟壶</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>刘永周</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">藏族皮影</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">傣族皮影</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">哈尼族皮影</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="group">
                    <li><h3>马基淞</h3></li>
                    <hr align="center" width="80%">
                    <li><a href="#">木雕香炉</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">葫芦茶盘</a></li>
                    <hr align="center" width="80%">
                    <li><a href="#">藤编花器</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Content end-->

<!-- Footer -->
<?php require('bottom.php'); ?>
</body>
</html>