<?php 
/**
 * 接受注册信息
 */

$str = 'user:'.$_POST['username'].'@email:'.$_POST['email'].PHP_EOL;
file_put_contents('../data/02.txt', $str, FILE_APPEND);
print_r($_POST);









