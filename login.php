<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link href="css/index.css" rel="stylesheet">
  <link href="css/new.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bottom.css">

  <title>匠心传承</title>
</head>

<!--body background="images/back.png" width=100%;height=100%-->

<body>
  <div style="position:absolute;left:0;top:0;width:100%;height:100%">
    <img src="images/back.png"width=100% height=100%>
  </div>
  <div class="row">
  <div class="col-md-6">
  </div>

  <div class="col-md-6">
    <div style="background:#FCFCFC;height:318px;width:423px;margin-top: 195px">


     <div class="row-fluid">
      <div class="span6">

        <ul id="myTab" class="nav nav-tabs">
         <li class="active">
           <a href="#login" data-toggle="tab"><h5 style="font-family: initial;">登录</h5></a> </li>
           <li><a href="#register" data-toggle="tab"><h5>注册</h5></a></li>

         </ul>
         <div id="myTabContent" class="tab-content">
           <?php
           require_once('db.php');
           session_start();

           if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['lgORre']))
           {
            $lgORre=$_POST['lgORre'];
            $user=$_POST['username'];
            $password=$_POST['password'];
            $con=DBconnect::getConnect();
            if( mysqli_connect_errno($con))echo '目前无法连接到数据库，请联系系统管理员。';
            if($lgORre=='login')
            {   
              $result=mysqli_query($con,"select u_name from user where u_name='".$user."' and u_pwd='".$password."'");
              if(!$result||mysqli_num_rows($result)==0)echo "用户名或密码错误";
              else
              {
                $_SESSION['username']=$user;
                $_SESSION['isLogin']=true;
                ?>
                <script type="text/javascript">location.href='<?php echo $_SERVER['HTTP_REFERER'];?>';</script>
                <?php
              }
            }
            if($lgORre=='register')
            {
              $result=mysqli_query($con,"insert into user(u_name,u_pwd) values('$user','$password')");
              if(!$result)
              {
                echo '注册失败，用户名已被占用';
              }
              else
              {
                echo '注册成功';
              }
            }


          }
          ?>
          <div class="tab-pane fade in active" id="login">
           <form method="post" action="login.php" class="bs-example bs-example-form" role="form">
           <div class="input-group">
            <input type="text" placeholder="用户名/手机号/邮箱" name="username" style="margin-top:50px;margin-left:75px;color: #000000">
            </div>
            <div class="input-group">
            <input type="password" placeholder="密码" name="password" style="margin-top:15px;margin-left:75px;color:#000000">
            <input type="hidden" name="lgORre" value="login"></input>
            </div>
            <br>
            <button type="submit" class="btn btn-success" style="margin-top:0px;margin-left: 75px;width: 80px;">登陆</button>
          </form>

        </div>
        <div class="tab-pane fade" id="register">
         <form method="post" action="login.php">
          <input type="text" name="username"style="margin-top:50px;margin-left:75px">
          <input type="password" name="password" style="margin-top:15px;margin-left:75px">
          <input type="hidden" name="lgORre" value="register"></input>
          <br>
          <button type="submit" class="btn btn-success" style="margin-top:0px;margin-left: 75px;width: 80px;">注册</button>

        </form>
    </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
<?php require('bottom.php');?>
</body>
</html>