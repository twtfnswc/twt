     <?php @session_start();?> 
   <?php
            include_once 'conn.php';
           $tucao_id=$_SESSION['tucao_id'];
          // echo $tucao_id;
           $sql="SELECT * FROM `comment` WHERE `tucao_id`='$tucao_id'";
           $inf= mysql_query($sql);
           if($inf==false)
           {
               die();
           }
           else
           {
           echo "网友评论：<br>";           
           while($row=mysql_fetch_row($inf))
            {
               echo $row[1]."   ".$row[3]."<br>";
            }
           }
        ?> 