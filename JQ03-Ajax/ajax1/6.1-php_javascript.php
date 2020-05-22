<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>PHP中使用JavaScript</title>
<?php
echo <<<jsrx
<script type="text/javascript">
function testThis() {
	alert('hello,renxing...');
}
</script>
jsrx;
?>
</head>
<body>
<div align="center">
<input type="button" value="click this" name="button" onclick="testThis()"/>
</div>
</body>
</html>