<?php session_start();?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        include_once 'conn.php';
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $sql="SELECT * FROM `users` WHERE `email`='$email'";
        mysql_query('set names UTF-8');
        $rst=mysql_query($sql);
        $n=mysql_affected_rows();
        if($n==0)
        {
            echo "不存在该用户";
            echo "<meta http-equiv='refresh'content=3;URL='index.php'>";
        }
        else{
        while($row= mysql_fetch_row($rst)){
        if($row[2]==$pwd){
            $_SESSION['email']=$email;
            
            //echo "密码正确...跳回首页";
             echo "<meta http-equiv='refresh'content=0;URL='index.php'>";
        }
        else{
            echo "密码错误";
            echo "<meta http-equiv='refresh'content=3;URL='register.php'>";
        }
        }
        }
        ?>
       
