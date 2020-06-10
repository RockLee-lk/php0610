<?php 
/*
$str = '我在学习PHP';
$regExp = '/PHP/';

// 匹配验证
if ( preg_match($regExp, $str, $arr)) {
	echo '正则表达式:
		<font size="5" color="#00f">' . $regExp . '</font><br>
		匹配字串:
		<font size="5" color="#00f">' . $str . '</font><hr>
		匹配结果:
		<font size="5" color="#0a0">成功</font><br>';
	echo '<pre>';
	print_r($arr); // 输出匹配到的结果
	echo '</pre>';
} else {
	echo '正则表达式:
	<font size="5" color="#00f">' . $regExp . '</font><br>
	匹配字串:
	<font size="5" color="#00f">' . $str . '</font><hr>
	匹配结果:
	<font size="5" color="#00f">失败</font><br>';
}


*/

//这里要去理解为什么要四个反斜线才能匹配


/*
$str = '\\';
$regExp = '/\\\\/';

// 匹配验证
if ( preg_match($regExp, $str, $arr)) {
	echo '正则表达式:
		<font size="5" color="#00f">' . $regExp . '</font><br>
		匹配字串:
		<font size="5" color="#00f">' . $str . '</font><hr>
		匹配结果:
		<font size="5" color="#0a0">成功</font><br>';
	echo '<pre>';
	print_r($arr); // 输出匹配到的结果
	echo '</pre>';
} else {
	echo '正则表达式:
	<font size="5" color="#00f">' . $regExp . '</font><br>
	匹配字串:
	<font size="5" color="#00f">' . $str . '</font><hr>
	匹配结果:
	<font size="5" color="#00f">失败</font><br>';
}


*/



/*
$str = "111\n222\t\t\t\t\t333\n444\n555";
$regExp = '/\n/';

// 匹配验证
if ( preg_match($regExp, $str, $arr)) {
	echo '正则表达式:
		<font size="5" color="#00f">' . $regExp . '</font><br>
		匹配字串:
		<font size="5" color="#00f">' . $str . '</font><hr>
		匹配结果:
		<font size="5" color="#0a0">成功</font><br>';
	echo '<pre>';
	print_r($arr); // 输出匹配到的结果
	echo '</pre>';
} else {
	echo '正则表达式:
	<font size="5" color="#00f">' . $regExp . '</font><br>
	匹配字串:
	<font size="5" color="#00f">' . $str . '</font><hr>
	匹配结果:
	<font size="5" color="#00f">失败</font><br>';
}




*/


$str = "13145201314";
// $regExp = '/\d/';
// $regExp = '/\d\d/';
// $regExp = '/\D/';
$regExp = '/\d/';

//视频在20190318 16-22-14-910
// 匹配验证
// if ( preg_match($regExp, $str, $arr)) { 下面的是全局匹配
if ( preg_match_all($regExp, $str, $arr)) {
	echo '正则表达式:
		<font size="5" color="#00f">' . $regExp . '</font><br>
		匹配字串:
		<font size="5" color="#00f">' . $str . '</font><hr>
		匹配结果:
		<font size="5" color="#0a0">成功</font><br>';
	echo '<pre>';
	print_r($arr); // 输出匹配到的结果
	echo '</pre>';
} else {
	echo '正则表达式:
	<font size="5" color="#00f">' . $regExp . '</font><br>
	匹配字串:
	<font size="5" color="#00f">' . $str . '</font><hr>
	匹配结果:
	<font size="5" color="#00f">失败</font><br>';
}





















