<?php

	header("Content-Type: text/html;charset=utf-8");		
	//定义一个多维数组
	$my['name'] = 'renxing';
	$my['age'] = 23;
	$my['sex'] = '男';
	$my['mobile'] = '13269318899';
	$my['keyword']['hobby']='玩电脑';
	$my['keyword']['job']='PHP开发工程师';
	$my['keyword']['dream']='挣很多钱';

	$you['name'] = '悟空';
	$you['age'] = 115;
	$you['sex'] = '女';
	$you['mobile'] = '18255887736';

	$his['name'] = '马化腾';
	$his['age'] = 36;
	$his['sex'] = '男';
	$his['mobile'] = '15566301206';
	
	$arr['my'] = $my;
	$arr['you'] = $you;
	$arr['his'] = $his;
	//print_r($arr);exit;
	$jsonstr = json_encode($arr);
	echo $jsonstr;



?>