<html>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
        <?php
        include_once 'conn.php';
        $sql="select * from `tucao`";
        $total=mysql_num_rows(mysql_query($sql));
        $pagesize=3;
        $pagenum=ceil($total/$pagesize);
        if(isset($_REQUEST['page'])){
        $page=intval($_REQUEST['page']);}
         else{
                    $page=1;
         }
        if($page>$pagenum||$page<=0)
        {
            echo "cannot find the page";
            
        }
        
       // select * from `tucao`,`users` where `tucao`.`user_id`=`users`.`user_id`
        $offset=($page-1)*$pagesize;
        $info=mysql_query("select * from `tucao`,`users` where `tucao`.`user_id`=`users`.`user_id` limit $offset,$pagesize");
        if(!$info)
        {
            echo "\$pagenum:".$pagenum;
          die("no result");  
        }
      else
        {
          for($i=1;$i<=$pagenum;$i++)
            {
            if($i==1)
                $show= "<a href=?page=1>第一页</a>";
            else if($i==$pagenum)
            {
                $show= "<a href=?page=".$i.">最后一页</a>";
            }
            else
            {
                $show="<a href=?page=".$i.">第".$i."页</a>";
            }
                echo $show." ";
          }
            echo "<br />";
            while($row= mysql_fetch_row($info))
            { 
                echo $row[3]."   ".$row[1]." 吐槽说:<br />";
                echo $row[2];
                $_SESSION['tucao_id']=$row[0];
                echo "<br/>";
                include 'comment.php';
                echo "<form action=post_comment.php method=post>";
                echo "comment:<input type='textarea' name='comment'><input type='submit' value='提交'>";
                echo "</form>";
                //点赞，删除 什么的。
                echo "<br/><br/><br/><br/><br/>";                
            }
    }
        ?>
    </html>