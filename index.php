<?php session_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
    </head>
    <body alink="#00FFFF">
<center font color="red">
        <?php include 'thief.php'?>
  </center>
  <blockquote><p align="right">
        你好,
        <?php
                if(@$_SESSION['email']!=''){
                echo @$_SESSION['email'];
				echo "<a href=\"exit.php\">退出登录</a><br />";

                }
                else
                echo "游客";
                ?>
   
  </p>
      <?php
      if(@$_SESSION['email']=='')
      {
      ?>
      <div align="right">      
          <a href="login.php">这里登录</a>        
          <a href="register.php" >点我就能注册哦^ ^</a>
      </div>
       <?php
      }
       ?>
    </blockquote>
    <div align="center"><br/>
    <?php include_once  'post.php';?>
      <?php
        if(@$_SESSION['email']!='')
        {
           
            include_once 'content.php';
        }
        ?>
      <br/><br/><br/><br/><br/><br/><br/>
    </div>
</body>
</html>
