<?php 
	
	//header("content-type: text/html;charset=utf-8");
	//返回xml格式
	header("content-type: text/xml;charset=utf-8");
	//file_put_contents("d:/mylog.log","ok",FILE_APPEND);
	$username=$_POST['username'];
	file_put_contents("d:/mylog.log","ok".$username."\r\n",FILE_APPEND);
	if($username=="shunping"){
		//echo "不可以用";
		//echo "[{'res':'不可以用','info':'哈哈'},{'res':'不uu','info':'哈哈uu'}]";
		echo "<result><res>不可以用</res><info>哈哈</info></result>";
	}else{
		//echo "可以用";
		//echo "[{'res':'可以用','info':'嘻嘻'},{'res':'可以iii用','info':'xixn'}]";
		echo "<result><res>可以用</res><info>嘻嘻</info></result>";
	}
