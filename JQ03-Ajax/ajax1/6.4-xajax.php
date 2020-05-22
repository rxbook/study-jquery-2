<?php
	require_once('./include/xajax_core/xajax.inc.php');	   //��xajax�ĺ������ļ������ڽű���
	$xajax = new xajax();							   	   //����xajax���ʵ������
	$xajax->configure('javascript URI', './include/');	   //����xajax��javascript·��
	/*����xajax����*/
	function helloWorld($user){						   	   
		$text = "Hello ".$user;
		$objResponse = new xajaxResponse();			 	   //����xajax��Ӧ
		$objResponse->assign('hello', 'innerHTML', $text); //������Ӧ����λ��
		return $objResponse;		   					   //����Ӧ����
	}
	$xajax->registerFunction("helloWorld");				   //��helloWorld��������ע��
	$xajax->processRequest();							   //����xajax����ͬʱ�õ���Ӧ
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	$xajax->printJavascript();							   //��ʼ��xajax
?>
	
<script type="text/javascript">
/*���ڵ���xajax������JavaScript*/
function sayhello(){
	var u=document.forms[0].username.value;	//�õ�����username�ı����ֵ
	xajax_helloWorld(u);					//����xajax����helloWorld��ע�⣬��������ˡ�xajax_��ǰ׺
	return false;
}
</script>
 
<body>
<div id="hello"></div>
<br/>
<form>
<input type="text" name="username"/>
<button onclick="sayhello()">Hello</button>
</form>
</body>
 