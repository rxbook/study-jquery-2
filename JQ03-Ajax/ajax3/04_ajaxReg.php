<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<script type="text/javascript">
function createXHR(){
	var xhr = null;
	if(window.XMLHttpRequest){ //chrome和FireFox和高版本IE
		xhr = new XMLHttpRequest();
	}else if(window.ActiveXObject){ //低版本IE
		xhr = new ActiveXObject('Microsoft.XMLHTTP');
	}
	return xhr;
}

function reg(){
	var obj = createXHR();
	//注意这里是POST提交
	obj.open('POST','./submitPage/02_href.php',true);
	//要发送的数据
	var uname = document.getElementById('username').value;
	var email = document.getElementById('email').value;

	//很重要：设置头部信息(key:value)
	obj.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	obj.send('username='+uname+'&email='+email);
	
	//回调函数
	obj.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			alert(obj.responseText);
		}
	}
}
</script>



<h2>【Ajax无刷新注册】</h2>
<p>用户名：<input type="text" id="username" /></p>
<p>邮箱：<input type="text" id="email" /></p>
<p><input type="button" value="提交" onclick="reg()" /></p>



