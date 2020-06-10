<?php 
// 输出过程
function sum($n)
{
	echo $n.'<br>';

	if ($n > 0) {
		//递归调用自己
		sum($n - 1);
	} else {
		echo '---------<br>';
	}
	echo $m.'<br>';
}





















