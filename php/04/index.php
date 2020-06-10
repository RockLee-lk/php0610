<?php 
/*
循环结构
	有约束条件的重复,有停止条件的判断

循环三要素

	1. 循环的初始值
	2. 循环条件
	3. 能使条件满足的变量, 增量(也可以是减量)

 */
echo '<table border="1" align="center" width="800" cellspacing="0">';


echo "<caption><h2>10 行 10 列 表格</h2></caption>";


$i = 0;
while ($i < 10) {
	echo '<tr>';
		$j = 0;
		while ($j < 10) {
			echo '<td>&nbsp</td>';
			$j++;

		}
	echo '</tr>';
	$i++;

}


echo "</table>";










/*
布尔型循环
	先判断 再循环
	while (表达式) {
		代码块
	}

	先循环 再判断
	do {
		代码块
	} while (表达式);


 */

















