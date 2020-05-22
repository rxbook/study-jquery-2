<?php
	require_once('./include/xajax_core/xajax.inc.php');	   //将xajax的函数库文件包含在脚本中
	$xajax = new xajax();							   	   //定义xajax类的实例变量
	$xajax->configure('javascript URI', './include/');	   //设置xajax的javascript路径
	/*定义xajax函数*/
	function helloWorld($user){						   	   
		$text = "Hello ".$user;
		$objResponse = new xajaxResponse();			 	   //定义xajax响应
		$objResponse->assign('hello', 'innerHTML', $text); //设置响应返回位置
		return $objResponse;		   					   //将响应返回
	}
	$xajax->registerFunction("helloWorld");				   //将helloWorld函数进行注册
	$xajax->processRequest();							   //发送xajax请求同时得到响应
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	$xajax->printJavascript();							   //初始化xajax
?>
	
<script type="text/javascript">
/*用于调用xajax函数的JavaScript*/
function sayhello(){
	var u=document.forms[0].username.value;	//得到表单中username文本框的值
	xajax_helloWorld(u);					//调用xajax函数helloWorld，注意，这里加入了“xajax_”前缀
	return false;
}
</script>
 
<body>
<div id="hello"></div>
<br/>
<form>
<input type="text" name="username"/>
<button onclick="sayhello()">Hello</button>
</form>
</body>
 