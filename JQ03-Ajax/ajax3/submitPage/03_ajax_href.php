<?php 
/**
 * 接受投票信息
 */

//sleep(1);
$cnt = file_get_contents('../data/01.txt');
$cnt = $cnt?$cnt:0;
$data = $cnt+1;
file_put_contents('../data/01.txt', $data);

echo $data;








