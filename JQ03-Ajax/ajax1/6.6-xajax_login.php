<?php
//��xajax�ĺ������ļ������ڽű���
require_once('./include/xajax_core/xajax.inc.php');
//����xajax���ʵ������
$xajax = new xajax();
//����xajax��javascript·��
$xajax->configure('javascript URI', './include/');
//����xajax���뼯
$xajax->setCharEncoding("gb2312");
//�ж��û���¼�ĺ���
function checkUser($userForm){
	//����xajax��Ӧ
	$objResponse = new xajaxResponse();
	//�����־����
	$ifNull=false;
	//�ж��û����Ƿ�Ϊ��
	if (trim($userForm['username']) == "") {
		$objResponse->alert("�������û���");
		$ifNull=true;
	}
	//�ж��û������Ƿ�Ϊ��
	if (trim($userForm['password']) == "") {
		$objResponse->alert("����������");
		$ifNull=true;
	}
	//���û�����������Ϊ�յ����
	if ($ifNull) {
		//��ʾ��¼��ť�ı�������������Ϊ���ã�ͬʱ������¼ʧ����ʾ
		$objResponse->assign("submit","value","��¼");
		$objResponse->assign("submit","disabled",false);
		$objResponse->assign("resultDiv","innerHTML","��¼ʧ��");
	}else {
		//����û���Ϊsunyang����ҲΪsunyang�������¼�ɹ���ʾ
		if ((trim($userForm['username'])=="admin")&&(trim($userForm['password'])=="admin")) {
			//����ť�ı���Ϊ���
			$objResponse->assign("submit","value","���");
			//������¼�ɹ���ʾ
			$objResponse->assign("resultDiv","innerHTML","��¼�ɹ�");
			//�������ı������
			$objResponse->clear("username","value");
			$objResponse->clear("password","value");
		}
		//���������¼ʧ����ʾ
		else {
			//����ť״̬��Ϊ���ã����������ı�Ϊ��¼
			$objResponse->assign("submit","value","��¼");
			$objResponse->assign("submit","disabled",false);
			//������¼ʧ����ʾ
			$objResponse->assign("resultDiv","innerHTML","�û�����������������µ�¼");
			//�������ı������
			$objResponse->clear("password","value");
		}
	}
	//����Xajax��Ӧ
	return $objResponse;
}
//��checkUser����ע��
$xajax->registerFunction("checkUser");
//����xajax����ͬʱ�õ���Ӧ
$xajax->processRequest();
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<html>
<head>
	<title>login</title>
	<?php
	//��ʼ��xajax
	$xajax->printJavascript();
	?>
	<script type="text/javascript">
	//����Xajax��JavaScript����
	function loginSubmit() {
		//����ť��Ϊ�����ã����������ı�Ϊ�����Ժ�
		xajax.$('submit').disabled=true;
		xajax.$('submit').value="���Ժ�";
		//����xajax����checkUser��������������Ϊ��������
		xajax_checkUser(xajax.getFormValues("loginForm"));
		return false;
	}
	</script>
</head>
<body onload="loginForm.username.focus()">
	<form id="loginForm" action="javascript:void(null);" onsubmit="loginSubmit();">
		<div>�û���:</div><div><input id="username" type="text" name="username" /></div>
		<div>����:</div><div><input type="password" name="password" /></div>
		<div class="submitDiv">
			<input id="submit" type="submit" value="��¼"/>
		</div>
	</form>
	<div id="resultDiv"></div>
</body>
</html>