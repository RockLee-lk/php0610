<?php 

	// 模式修正符
	

	// 小写的x,消除所有空格

	// 贪婪模式/非贪婪模式(懒惰模式)
	$str = 'i love money_123123123123123456123';

	$preg = '/money.*123/';   #贪婪模式 		.*
	$preg = '/money.*?123/';  #非贪婪模式	.*?

// 大写字母U可以切换模式
	$preg = '/money.*?123/U';  #懒惰模式	-> 转为贪婪模式
	$preg = '/money.*123/U';  #贪婪模式 -> 转为懒惰模式




	preg_match($preg, $str, $result);
	var_dump($result);

// 一旦结果发生歧义的时候,贪婪和非贪婪模式就出现了





// 不区分大小写 小写字母i



// 模式修正符可以组合使用,比如既忽略空白,也不区分大小写


// s视为一行: .不能匹配\n,但是加了s就可以视为一行

//u 小写的u:启用额外的prel功能,例如支持中文
	// strlen(string)
//

$name = '老干妈';
// $preg = '/./';
$preg = '/./u';
preg_match_all($preg, $name, $result);
var_dump($result);

// 请统计 $name 的长度,不能使用函数strlen()
// 
// 
$name = 'i love 杨银凯';

print(strlen($name));

// 我们可以利用 . 和 preg_match_all 来求字符串长度,甚至加上模式修正符可以支持中文
$preg = '/./u';
// $preg = '/./';

$res = preg_match_all($preg, $name);
var_dump($res);




 ?>