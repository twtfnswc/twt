<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conn
 *
 * @author Song
 */
//      localhost版本
//    $host=SAE_MYSQL_HOST_M;
//    $name=SAE_MYSQL_USER;
//    $pwd=SAE_MYSQL_PASS;
//    $db_name=SAE_MYSQL_DB;
//
//
//    $conn=mysql_connect($host, $name, $pwd);
//    mysql_select_db($db_name,$conn);
        $link=mysql_connect(SAE_MYSQL_HOST_M.':'.
        SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
        mysql_select_db(SAE_MYSQL_DB,$link);
         
    mysql_query('set names UTF-8');
    if($link)
    {
    //  echo "连接成功";      //数据库连接测试
    }
function mysql_query_rst($sql)
{
    $result=  mysql_query($sql);
    var_dump(mysql_query($sql));
}
function getRowsNum($sql)
{
    $this->mysql_query_rst($sql);
    if(mysql_errno()==0)
        return mysql_num_rows ($result);
    else 
        return 0;
}
?>
