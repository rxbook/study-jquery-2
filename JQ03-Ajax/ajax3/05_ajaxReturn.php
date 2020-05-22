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

function test1(){
	var obj = createXHR();
	obj.open('GET','./submitPage/05_ajaxReturn_href.xml',true);
	obj.send(null);
	
	//回调函数
	obj.onreadystatechange = function(){
		if(this.readyState == 4){
			var chs = obj.responseXML.getElementsByTagName('book')[0];
			//alert(chs.firstChild.lastChild.wholeText);//输出有问题
		}
	}
}
</script>


<p><input type="button" value="测试1" onclick="test1()" /></p>



