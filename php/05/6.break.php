<?php 

/*
break
	遇到 break 就直接结束当前的 分支或者循环
	for / foreach .while / do-while / switch


 */

for ($i=0; $i < 20; $i++) { 
	if ($i == 5) {
		echo $i.'/';
		break;
	}
}
//满足条件的时候,将执行代码break,就结束了当前的分支或者循环了



/*
break 可带参数(参数是可选的) num
num 代表 跳出指定层数的结构

	遇到 break 就直接结束当前的 分支或者循环
	for / foreach .while / do-while / switch


 */

for ($i=0; $i < 50; $i++) { 
	echo $i.'<br>';
	switch ($i) {
		case 5:
			echo '我是case 5/break1<br>';
			break 1; // 只跳出了switch层
		
		case 15:{
			echo '我是case 15/break2<br>';
			break 2;
// 这里的break2就是跳出层级2的意思
			//直接就跳出了整个for循环
		}
	}
}










