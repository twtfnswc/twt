
function $(idValue)
{  
    return document.getElementById(idValue);
};
window.onload=function(){
        $('txtemail').focus();

};
var cemail='',cpwd1='',cpwd2='';
function chkreg(){
    if((cemail=='yes')&&(cpwd1=='yes')&&(cpwd2=='yes'))
          $('regbtn').disabled=false;
    else
           $('regbtn').disabled=true;
           
}
$('txtemail').onkeyup=function(){
   filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   $('txtemail').value.match(filter);
 if ($('txtemail').value.match(filter)===null) {
     $('div0').innerHTML='<font color=red>邮箱错误</font>';
     cemail='';
    }
 else {
     cemail='yes';
     $('div0').innerHTML='<font color=red>邮箱正确</font>';
 }
   chkreg();
};
$('txtpwd2').onkeyup=function(){
    pwd1=$('txtpwd1').value;
    pwd2=$('txtpwd2').value;
    if(pwd1!=pwd2)
        {
            $('div1').innerHTML='<font color=red>密码不一致</font>';
            cpwd1='';
            cpwd2='';
        }
        else{
             $('div1').innerHTML='<font color=red>正确</font>';
            cpwd1='yes';
            cpwd2='yes';
        }
        chkreg();
};
