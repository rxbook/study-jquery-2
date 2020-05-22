<?php 
/**
 * 接受投票信息
 */

$cnt = file_get_contents('../data/01.txt');
$cnt = $cnt?$cnt:0;
$data = $cnt+1;
file_put_contents('../data/01.txt', $data);

//HTTP 204 No Content （没有内容）
header('HTTP/1.1 204 No Content');








