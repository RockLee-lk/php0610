<?php 

// 引用参数的函数


$a = 10;
$b = &$a;

$b = 100;


/*
function test($n)
{
	$n = $n + $n;
	return $n;
}



$p = 50;
echo $p;
echo '<br>';
test($p);
echo $p;
*/


function test(&$n)
{
	$n = $n + $n;
	return $n;
}



$p = 50;
echo $p;
echo '<br>';
test($p);
echo $p;

//(调用引用参数的函数时,只能传递变量,不能传递具体的值)

// php内置引用参数的函数
// 打乱数组

$arr = array(1,2,3,4,5,6,7,8,9,);
shuffle($arr);
print_r($arr);

// 排序数组
sort($arr);
print_r($arr);

// str_shuffle() 打乱字串
$str = '123456789';
$a = str_shuffle($str);

echo $str;
echo '<hr>';
echo $a;























