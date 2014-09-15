<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <?php
       include 'conn.php';
     //mysql_query('set names UTF-8');
       @$email=$_POST['txtemail'];
       @$pwd=$_POST['txtpwd1'];
       
       $ip=  rand(10000, 60000);
       $sql="SELECT * FROM `users` WHERE `email`='$email'";
       $sql2="INSERT INTO `users`(`user_id`, `email`, `pwd`,`nickname`,`power`) VALUES ('$ip','$email','$pwd','NULL','0')";
       //echo $email;
         $rst=mysql_query($sql);
           $row= mysql_fetch_row($rst);
         if($row!=null)
         {
             echo "邮箱已被注册..即将返回注册页面重新注册";
             echo "<meta http-equiv='refresh'content=3;URL='register.php'>";
         }
         else{
             mysql_query($sql2);
             include_once 'sendmail.php';
             echo "<center>注册成功,请等待返回首页...</center>";
             echo "<meta http-equiv='refresh'content=3;URL='index.php'>";
         }
      ?>