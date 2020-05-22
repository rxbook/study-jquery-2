<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<head>
<title>使用 ajax完成用户名的验证</title>
<script>
//alert(gt("username").value);
//创建ajax引擎
function getXmlHttpObj(){
	var xmlHttpRequest;
	//不同的浏览器获取对象xmlHttpRequest对象的方法不一样
	if(window.ActiveXObject){
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xmlHttpRequest = new XMLHttpRequest();
	}
	return xmlHttpRequest;
}

var myRequest = "";
//验证用户名是否存在
function checkName(){
	myRequest = getXmlHttpObj();
	//怎么判断创建OK
	if(myRequest){
		//通过myRequest对象发送请求到服务器的某个页面
		//加上mytime参数，是为了防止缓存
		var url="exec.php?mytime="+new Date()+"&username="+gt("username").value;
		//打开请求，这里需要传递三个参数，说明如下：
		//1.第一个参数表示请求的方式, "get" / "post"
		//2.第二个参数指定url,对哪个页面发出ajax请求(本质仍然是http请求)
		//3.第三个参数表示 true表示使用异步机制,如果false表示不使用异步
		myRequest.open("get",url,true);
		//指定回调函数，这里的"chuli" 是 函数名
		myRequest.onreadystatechange=chuli;
		//发送请求，如果是get请求则传入null即可；如果是post请求，则传入实际的数据。
		myRequest.send(null);	
	}	
}

//回调函数chuli
function chuli(){
	//取出从exec.php页面返回的数据
	if(myRequest.readyState==4){
		//取出值，返回到当前页面
		var res = myRequest.responseText;
		gt("myres").innerHTML = res;
		//alert(res);
	}
}

//附加：获取某个id
function gt(id){
	return document.getElementById(id);
}

</script>


</head>

<body>
	<form action="" method="post">
    用户名:<input type="text"  name="uname" id="username" onchange="checkName();">
    <span style="color:red" id="myres"></span>	<br/>
	密码:<input type="password"  name="pwd" id="password">
    <br/>
    
    <input type="submit" value="用户注册">
    </form>
</body>
</html>