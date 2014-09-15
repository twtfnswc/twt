<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style> 
    body{ text-align:center} 
    .div{ margin:0 auto; width:400px; height:100px; border:1px solid #F00} 
    /* css注释：为了观察效果设置宽度 边框 高度等样式 */ 
    </style> 
    </head>    
    <body> 
        <div class="div">
        <form action="login_chk.php" method="post">
            email:<input type="text" id="email" name="email" onblur=isEmail(this.value)><br />
            <SCRIPT LANGUAGE=javascript > 
            function isEmail(strEmail) { 
            if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1) 
              return true; 
            else 
             alert("请输入正确邮箱名\n"); 
            } 
            </SCRIPT> 
            密码：<input type="password" id="password" name="password"><br />
            <input type="submit" value="登录"> 
        </form> 
        </div>
    </body>
</html>
