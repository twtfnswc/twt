<?php session_start();
        header("Content-type: text/html; charset=utf-8");
        include 'conn.php';
        $date=date("Y/m/d/h/m/s");
        //echo "这是时间".$date."<br />";
        $text=$_POST['text'];
        if($text=='')
        {
            echo "<script>alert('请输入吐槽文字！');</script>";
            die("<meta http-equiv='refresh'content=1;URL='index.php'>");
        }
        $ip=$_SERVER["REMOTE_ADDR"];
        if(@$_SESSION['email']==''){
            echo "<script>alert('请先登录');</script>";
            die("<meta http-equiv='refresh'content=1;URL='index.php'>");
        }
        else
                    $email=@$_SESSION['email'];
        $sqlID="select `user_id` from `users` where `email`='$email'";
        $id=mysql_fetch_row(mysql_query($sqlID));
       //echo "这是user_id:".$id[0].",这是email".$email;
        $sql = "INSERT INTO `tucao`(`user_ip`, `user_text`, `user_date`,`user_id`) VALUES ('$ip','$text','$date','$id[0]]')";
        mysql_query($sql);
     
        ?>
<?php  
        $url = "./index.php";  
        echo "<script language='javascript' type='text/javascript'>";  
        echo "window.location.href='$url'";  
        echo "</script>";      
?>  
