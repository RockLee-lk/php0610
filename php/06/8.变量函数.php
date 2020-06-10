<?php 

// 变量函数(动态调用)

// 可变变量

$a = 'hehe';
$hehe = '1234567';

echo $$a;

echo '<br>';

// 选择密码加密方式

$enc = empty($_GET['enc'])?'md5':$_GET['enc'];
echo $enc('123456');






























