<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>
<title>使用 ajax完成用户名的验证</title>
<script>

function getXmlHttpObj(){
	var xmlHttpRequest;	
	if(window.ActiveXObject){
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xmlHttpRequest = new XMLHttpRequest();
	}
	return xmlHttpRequest;
}

var myRequest = "";
function checkName(){
	myRequest = getXmlHttpObj();	
	if(myRequest){		
		var url="exec.php";		
		var data="username=123";		
		myRequest.open("post",url,true);		
		myRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
		myRequest.onreadystatechange=chuli;		
		myRequest.send(data);	
	}	
}


function chuli(){	
	if(myRequest.readyState==4){
		//在xmlhttprequest对象接收到json数据后，应当转成对象数组
		var reses=eval("("+myRequest.responseText+")");			
		 
		alert(reses.my.name);	//renxing
		alert(reses.my.age);	//23
		alert(reses.my.keyword.hobby);	//玩电脑
		alert(reses.my.keyword.job);	//PHP开发工程师		
		alert(reses.you.name);	//悟空
		alert(reses.you.age);	//115
		alert(reses.his.name);	//马化腾
		alert(reses.his.mobile);//15566301206			
	}
}


</script>


</head>

<body>
<form action="" method="post">
    <input type="button" value="ajax处理json，其实很简单。^_^" id="btn" onclick="checkName();"> <br>
     
</form>
</body>
</html>