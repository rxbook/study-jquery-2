<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>Ajax Hello sunyang</title>
<script language="JavaScript" type="text/javascript">
//创建XMLHttpRequest的函数
function createXMLHttp(){
	var request;
	var browser=navigator.appName;//得到当前浏览器
	if(browser=="Microsoft Internet Explorer"){//如果是IE浏览器
		request=new ActiveXObject("Microsoft.XMLHttp");
		return request;
	}else{//非IE浏览器
		request=new XMLHttpRequest();
		return request;
	}
}
var xhr=createXMLHttp(); //定义XMLHttpRequest变量
function HelloSunyang(){
	var url="hello.php?name=" + document.forms[0].name.value;//跳转路径
	xhr.open("GET",url,true);//跳转
	xhr.onreadystatechange=getHello;//设置回调函数为getHello
	xhr.send();//将请求发送
}
function getHello(){
	if(xhr.readyState==4){//判断XmlHttpRequest状态，描述如下：
		/*0：描述一种"未初始化"状态；此时，已经创建一个XMLHttpRequest对象，但是还没有初始化。
		  1：描述一种"发送"状态；此时，代码已经调用了XMLHttpRequest open()方法并且XMLHttpRequest已经准备好把一个请求发送到服务器。
		  2：描述一种"发送"状态；此时，已经通过send()方法把一个请求发送到服务器端，但是还没有收到一个响应。
		  3：描述一种"正在接收"状态；此时，已经接收到Http响应头部信息，但是消息体部分还没有完全接收结束。
		  4：描述一种"已加载"状态；此时，响应已经被完全接收。*/
		var helloStr = xhr.responseText;//设置变量helloStr的值为响应返回值
		document.getElementById("hello").innerHTML=helloStr;//将响应返回值显示在名为hello的div标签中
	}
}
</script>
</head>
<body>
<table>
	<tr>
		<td>
		<form>
			your name: <input type="text" name="name" value=""/>
		</form>
		</td>
	</tr>
	<tr>
		<td>
		<!--定义按钮，并设置点击此按钮调用HelloSunyang函数-->
		<input type="button" name="" value="hello" onclick="HelloSunyang()">
		</td>
	</tr>
	<tr>
		<td>
			<!--接收返回内容的div标签-->
			<div id="hello"></div>
		</td>
	</tr>
</table>
</body>
</html>
