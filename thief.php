<SCRIPT language=javascript>
function g(formname)	{
var url = "http://www.baidu.com/baidu";
if (formname.s[1].checked) {
	formname.ct.value = "2097152";
}
else {
	formname.ct.value = "0";
}
formname.action = url;
return true;
}
</SCRIPT>
<form name="f1" onsubmit="return g(this)">
<table bgcolor="#FFFFFF" style="font-size:9pt;">
<tr height="60"><td valign="top"></td>
<td>
<input name=word size="30" maxlength="100">
<input type="submit" value="3tian.co站内搜索"><br>
<input name=tn type=hidden value="bds">
<input name=cl type=hidden value="3">
<input name=ct type=hidden>
<input name=si type=hidden value="www.3tian.co">
<input name=s type=radio >百度
<input name=s type=radio checked> 站内搜索
</td></tr></table>
</form>