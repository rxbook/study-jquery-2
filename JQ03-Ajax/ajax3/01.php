<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<a href="./submitPage/01_href.php">给xxx投票</a>

<a href="javascript:vote()">给yyy投票,用JS实现</a>
<div id="pgs"></div>
<script>
function vote(){
	var para = document.createElement('img'); //创建img标签
	//para.setAttribute('src','../rewrite.png');
	para.setAttribute('src','./submitPage/01_href.php'); //设置src属性，此时浏览器将会请求src对应的资源
	//document.getElementById('pgs').appendChild(para);
}
</script>


<?php 
echo '当前投票数：'.file_get_contents('./data/01.txt');
?>


<h2>【注册】</h2>
<form action="./submitPage/02_href.php" method="post" target="regzone">
<p>用户名：<input type="text" name="username" /></p>
<p>邮箱：<input type="text" name="email" /></p>
<p><input type="submit" value="提交" /></p>
</form>
<iframe name="regzone" style="display: none"></iframe>



