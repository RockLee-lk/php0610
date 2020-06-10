<?php 

// 1~100 递增值 / 阶乘 / 目录统计 / 无限分类 / 迷宫算法


function sum($n)
{
	if ($n > 0)
	{
		return $n + sum($n - 1);
	}
}



// 阶乘
