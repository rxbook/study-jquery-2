<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>Ajax Hello sunyang</title>
<script language="JavaScript" type="text/javascript">
//����XMLHttpRequest�ĺ���
function createXMLHttp(){
	var request;
	var browser=navigator.appName;//�õ���ǰ�����
	if(browser=="Microsoft Internet Explorer"){//�����IE�����
		request=new ActiveXObject("Microsoft.XMLHttp");
		return request;
	}else{//��IE�����
		request=new XMLHttpRequest();
		return request;
	}
}
var xhr=createXMLHttp(); //����XMLHttpRequest����
function HelloSunyang(){
	var url="hello.php?name=" + document.forms[0].name.value;//��ת·��
	xhr.open("GET",url,true);//��ת
	xhr.onreadystatechange=getHello;//���ûص�����ΪgetHello
	xhr.send();//��������
}
function getHello(){
	if(xhr.readyState==4){//�ж�XmlHttpRequest״̬���������£�
		/*0������һ��"δ��ʼ��"״̬����ʱ���Ѿ�����һ��XMLHttpRequest���󣬵��ǻ�û�г�ʼ����
		  1������һ��"����"״̬����ʱ�������Ѿ�������XMLHttpRequest open()��������XMLHttpRequest�Ѿ�׼���ð�һ�������͵���������
		  2������һ��"����"״̬����ʱ���Ѿ�ͨ��send()������һ�������͵��������ˣ����ǻ�û���յ�һ����Ӧ��
		  3������һ��"���ڽ���"״̬����ʱ���Ѿ����յ�Http��Ӧͷ����Ϣ��������Ϣ�岿�ֻ�û����ȫ���ս�����
		  4������һ��"�Ѽ���"״̬����ʱ����Ӧ�Ѿ�����ȫ���ա�*/
		var helloStr = xhr.responseText;//���ñ���helloStr��ֵΪ��Ӧ����ֵ
		document.getElementById("hello").innerHTML=helloStr;//����Ӧ����ֵ��ʾ����Ϊhello��div��ǩ��
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
		<!--���尴ť�������õ���˰�ť����HelloSunyang����-->
		<input type="button" name="" value="hello" onclick="HelloSunyang()">
		</td>
	</tr>
	<tr>
		<td>
			<!--���շ������ݵ�div��ǩ-->
			<div id="hello"></div>
		</td>
	</tr>
</table>
</body>
</html>
