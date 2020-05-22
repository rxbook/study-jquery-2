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

function vote(){
	//实例化
	var obj = createXHR();
	//打开连接
	//第三个参数表示“是否异步”，true表示异步（不等待），false表示同步（等待）
	obj.open('GET','./submitPage/03_ajax_href.php',true);
	//发送请求
	obj.send(null);
	//alert(obj.responseText);
	
	//绑定状态变化的回调函数
	obj.onreadystatechange = function(){
		/*测试各种返回值*/
		var str = '';
		str += '<br> readyState(返回码):'+this.readyState; //XHR对象自身的返回码，不断变化，0-4
		str += '<br> status(状态码):'+this.status; //服务器的返回状态码，200/304/404/500/...
		str += '<br> statusText(状态码文字):'+this.statusText;  //服务器的返回状态码对应的文字

		str += '<br><br> [getAllResponseHeaders(所有头部信息)]'+this.getAllResponseHeaders();
		
		str += '<br><br> [getResponseHeader(头部信息)]';
		str += '<br> ----> Content-Type(类型):'+this.getResponseHeader('Content-Type');
		str += '<br> ----> Content-length(主体长度):'+this.getResponseHeader('Content-length');
		//其它头部信息：Date/Server/X-Powered-By  同上面两个

		str += '<br><br> responseText(主体信息):'+this.responseText; 
		document.getElementById('show').innerHTML = str;

		//obj.abort(); //中断操作，后面的不再执行
		
		/*请求成功的情况*/
		if(this.readyState == 4 && this.status == 200){
			alert('请求完成了，投票总数(服务器返回的主体信息)：'+obj.responseText);
		}
	}
	alert('原来的JS流程...');
}
</script>

<a href="javascript:vote();">用Ajax实现投票</a>
<div id="show"></div>
