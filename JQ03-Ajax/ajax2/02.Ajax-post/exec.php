<?php
	/*这里两句话很重要*/
	//第一句话告诉浏览器返回的数据是html格式和编码
	header("Content-Type: text/html;charset=utf-8");
	//第二句话告诉浏览器不要缓存数据
	header("Cache-Control: no-cache");

	//接收数据
	$username = $_POST['username'];
	//执行相关PHP代码。此处只是简单的判断
	if($username=="admin"){
		echo "用户名".$username."正确";
	}else{
		echo "用户名".$username."不正确";
	}


?>