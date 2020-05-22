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
		//获取服务器端xml中"city"节点
		var myxml = myRequest.responseXML.getElementsByTagName("city");		
		//取出"city" 节点的值
		//说明：myxml[0] 表示取出第一个city节点；
		//myxml[0].childNodes[0] 表示第一个city节点的第一个子节点		
		var res1 = myxml[0].childNodes[0].nodeValue;
		var res2 = myxml[1].childNodes[0].nodeValue;
		var res3 = myxml[2].childNodes[0].nodeValue;
		var res4 = myxml[3].childNodes[0].nodeValue;
		alert(res1);
		alert(res2);
		alert(res3);
		alert(res4);
				
	}
}


</script>


</head>

<body>
<form action="" method="post">
    <input type="button" value="ajax处理xml" id="btn" onclick="checkName();"> <br>
     
</form>
</body>
</html>