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
                <h1>FEATURED &nbsp ITEMS</h1>
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
            <h1>LATEST &nbsp ITEMS</h1>
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
<?php require('bottom.html'); ?>
</body>
</html>