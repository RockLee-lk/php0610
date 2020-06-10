<?php 

// 可变参数个数的函数(参数不定长)

var_dump(min(1,2,3));
var_dump(max(1,2,3));

/*
如果自定义这种函数,需要用到一下系统函数配合:
- func_num_args()  返回实参个数
- func_get_arg()   通过索引获取1个参数的值,从0开始数
- func_get_args()  返回所有的参数,以数组的形式


 */


//自定义一个求和函数

function sum()
{
	// 输出所有的参数
	// var_dump(func_get_args());

	// 将参数个数 赋值给 $len
	$len = func_num_args();
	// echo $len;

	// 变量的初始值
	$res = 0;
	for ($i=0; $i < $len; $i++) { 
		$res += func_get_arg($i);
	}
	//返回累加的结果
	return $res;
}







