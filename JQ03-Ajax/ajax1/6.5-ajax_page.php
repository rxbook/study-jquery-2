<?php
header("Content-Type:text/html;charset=gb2312");//�������,������������
?>
<html>
<head>
<title>ajax��ҳ</title>
<script language="javascript">
//����XMLHttpRequest�ĺ���
function createXMLHttp(){

	//�õ���ǰ�����
	var browser=navigator.appName;
	//�����IE�����
	if(browser=="Microsoft Internet Explorer"){
		http_request=new ActiveXObject("Microsoft.XMLHttp");
	}
	//��IE�����
	else{
		http_request=new XMLHttpRequest();
	}
}

function changePage(url){
	http_request.onreadystatechange=newPage;
	//ȷ����������ʽ��URL�����Ƿ�ͬ��ִ���¶δ���
	http_request.open("GET",url,true);
	http_request.send(null);
}

//��������Ϣ�ĺ���
function newPage(){
	if(http_request.readyState==4){
		if(http_request.status==200){
			document.getElementById("newpage").innerHTML=http_request.responseText;
		}
	}
}
function dopage(url){
	//����http_request����
	var http_request=false;
	//ʹ��createXMLHttp������http_request�������и�ֵ
	createXMLHttp();
	document.getElementById("newpage").innerHTML="���ڶ�ȡ����...";
	changePage(url);
}
</script>
</head>
<body>
<div id="newpage">
<?php
//�������ݿ�����
$db=mysql_connect("localhost","root","root");
//ѡ��Ҫ���������ݿ�
mysql_select_db("ajaxpage");
//�����ݱ����ȫ�������ͬʱ�õ��ܼ�¼��
$result=mysql_query("select * from userinfo");
$total=mysql_num_rows($result);

//�õ���ǰ��ʾҳ��
$page=isset($_GET['page'])?intval($_GET['page']):1;
//ÿҳ��ʾ5������
$num=5;

//����ҳ��
//��ҳ��
$pagenum=ceil($total/$num);
//��ǰ��ʾҳ��
$page=min($pagenum,$page);
//��һҳ
$prepage=$page-1;
//��һҳ
$nextpage=($page==$pagenum?0:$page+1);
/*
* �õ���ǰҳ��֮ǰ�ļ�ҳһ����ʾ�˶�������¼��
* ����ǵ�ǰҳΪ��5ҳ�����������ֵ���ǵ�1ҳ����4ҳ�ܹ���ʾ�ļ�¼��
* ����ÿҳ��ʾ5�����ݼ���Ҳ����(5-1)*5=20����¼
*/
$allData=($page-1)*$num;

//���巭ҳ����
//��ǰҳ���ַ
$url='6.5-ajax_page.php';
//�ܼ�¼��
$pageController="�ܼ�¼�� $total �� ";
//�ڷ�ҳ�����м�����ת����ҳ������
$pageController.=" <a href=javascript:dopage('$url?page=1');>��ҳ</a> ";
//�ڷ�ҳ�����м�����ת����һҳ������
if($prepage){
	$pageController.=" <a href=javascript:dopage('$url?page=$prepage');>��ҳ</a> ";
}
else{
	$pageController.=" ��ҳ ";
}
//�ڷ�ҳ�����м�����ת����һҳ������
if($nextpage){
	$pageController.=" <a href=javascript:dopage('$url?page=$nextpage');>��ҳ</a> ";
}
else{
	$pageController.=" ��ҳ ";
}
//�ڷ�ҳ�����м�����ת��ĩҳ������
$pageController.=" <a href=javascript:dopage('$url?page=$pagenum');>ĩҳ</a> ";
//�ڷ�ҳ�����м���ҳ����Ϣ
$pageController.="�� ".$page."/".$pagenum." ҳ";

//��ʾҳ��������Ϣ
If($page>$pagenum||$page<=0){
	echo "ҳ�� ".$page."������";
	exit;
}

//ʹ��MySQL�ķ�ҳ��ѯ
$info=mysql_query("select * from userinfo limit $allData,$num");

//����ҳ��ѯ���ؼ�¼��ʾ��ҳ����
echo "<table border=1><tr><td>�û���</td><td>����</td></tr>";
while($it=mysql_fetch_array($info)){
	echo "<tr><td>".$it['name']."</td><td>".$it['password']."</td></tr>";
}
echo"</table>";
//��ʾ��ҳ����
echo $pageController;
?>
</div>
</body>
</html>