<?php 

// 多维数组
// 当某个数组的元素值 还是一个数组时,该数组就是一个多维数组

$arr = [
	'group1' => [
		'aa',
		'bb',
		'cc'
	],
	'group2' => [
		'dd',
		'ee',
		'ff'
	]
];


$arr['group3'] = ['gg','hh','ii'];
var_dump($arr);

echo $arr['group1'][1];
echo $arr['group2'][1];


//错误写成了
// $arr['gropu2'] = '小李';
//其实本意是
$arr['group2'][] = '小李';//正确的追加

/*
统计数组的个数
count() 	统计数组元素个数





 */
var_dump(count($arr));
//如果就是单独想统计某一维数组下面的元素个数

var_dump(count($arr['group1']));

//如果想统计所有维度下的所有元素个数
//注意这里的统计所有,是统计所有作为元素的个数,包括作为元素的数组

var_dump(count($arr, 1));






