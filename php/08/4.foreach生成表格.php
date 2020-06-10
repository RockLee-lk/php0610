<?php 
$arr = [
	[
		'id' => '1',
		'name' => '貂蝉',
		'sex' => '女',
		'age' => '18',
		'birthday' => '20000202'
	],
	[
		'id' => '2',
		'name' => '貂蝉2',
		'sex' => '女',
		'age' => '18',
		'birthday' => '20000202'
	],
	[
		'id' => '3',
		'name' => '貂蝉3',
		'sex' => '女',
		'age' => '18',
		'birthday' => '20000202'
	]

];

//掌握foreach结合表格进行页面数据输出,用两次foreach嵌套
echo '<table border="1" width="800" align="center" cellspacing="0">';
	echo '<caption><h3>英雄信息表</h3></caption>';
	echo '<tr>';
		echo '<th>ID</th>';
		echo '<th>NAME</th>';
		echo '<th>SEX</th>';
		echo '<th>AGE</th>';
		echo '<th>BIR</th>';
	echo '</tr>';







foreach ($arr as $val) {
	echo '<tr>';
	foreach ($val as $v) {
		echo '<td>'.$v.'</td>';
	}
	echo '</td>';
}

echo '</table>';









