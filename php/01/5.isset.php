<?php 
/*
unset();	删除变量
isset();	判断一个变量是否存在 true / false
	1. 当变量被unset掉时,则isset会自动返回false
	2. 当变量被赋值为null时,则isset会自动返回false;
empty(); 	判断一个变量是否为空





 */
$a = '远看山有色,近听水无声。';
var_dump(isset($a));

echo isset($a);
//不适合输出格式化数据
// 一般来说,被赋值的变量就存在,没有被赋值过的变量就是不存在









