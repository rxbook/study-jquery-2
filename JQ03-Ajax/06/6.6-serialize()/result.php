<?php 
	$username=$_REQUEST['username'];
	$content=$_REQUEST['content'];
	if($username=="rx" && $content=="123"){
		echo "renxing";
	}else{
		echo "anyone";
	}
?>
