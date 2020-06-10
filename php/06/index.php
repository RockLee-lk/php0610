<?php 
// 回调函数

// 求和 
// 求积
function sum($n1, $n2)
{
	return $n1 + $n2;
}

//求积
function mul($n1, $n2)
{
	return $n1 * $n2;
}

//如果把加减乘除都写成函数就很麻烦,如何简便



// 声明回调函数
function result($n1, $n2, $callback = 'sum')
{
	return $callback($n1, $n2);
}
	echo result(10,20);
	echo '<hr>';
	echo result(10,20,'mul') ;















