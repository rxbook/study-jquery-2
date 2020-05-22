<?php	
	//这里一定要指明：返回的数据是xml格式，而不是html
	header("Content-Type: text/xml;charset=utf-8");	 
	//$username=$_POST['username'];//接收传递来的参数
	echo file_get_contents("test.xml");	//输出一个xml字符串


?>