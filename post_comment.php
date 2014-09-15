<?php session_start();?> 
<?php
        // put your code here
        include_once 'conn.php';
        
        $comments=$_POST['comment'];
        $tucao_id=$_SESSION['tucao_id'];
        $date=date("Y/m/d/h/m/s");
        echo  $comments.$tucao_id.$date;
         $sql ="INSERT INTO `comment`(`tucao_id`, `comment_date`,`comments`) VALUES ('$tucao_id','$date','$comments')";
         mysql_query($sql);
 ?>

<?php  
            $url = "./index.php";  
            echo "<script language='javascript' type='text/javascript'>";  
            echo "window.location.href='$url'";  
            echo "</script>";  
?>  