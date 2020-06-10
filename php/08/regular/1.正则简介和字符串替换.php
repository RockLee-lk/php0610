<?php 
// 使用字符串处理 替换
$str = '退役声明：

大家好我是uzi，很遗憾的告诉大伙，自豪决定退役了。

因为常年的压力大 肥胖 饮食不规律 熬夜等原因，我在去年体检的时候查出二型糖尿病，糖化血红蛋白指数已经到了11%，正常应该是小于等于6.5%。这半年我有慢慢的改变作息、控制饮食、减肥、运动和吃药，可是情况没有得到改变，并且因为吃药我的精神状态没有以前那么好了，医生也说如果再继续严重下去，并发症很快就会出现，加上我原本手伤就比较严重，我的身体条件不允许我再继续战斗下去了。

感谢我的粉丝们这些年对我不离不弃的支持和陪伴，谢谢你们一直都在默默地为我加油，鼓励我，成为我这些年最坚强的后盾，真的很感谢你们。

感谢我的家人和婷婷这些年对我的支持理解还有照顾，谢谢你们对我的包容和付出。

最后感谢RNG电子竞技俱乐部 ，谢谢你们对我的照顾和帮助，很幸运我能成为rng的一员。虽然我已退役，但我依然是rng的一份子，会在未来的日子里和rng一起走下去。

到这里就结束了，谢谢所有人。 

2012-2020，再见了我的青春。QAQ';
echo $str;
echo '<hr>';

// 查找和替换
$new_str = str_replace('rng', 'lpl的rng战队', $str);
echo $new_str;

echo '<hr>';
$msg = '我常用的思维导图软件有: Xmind软件,百度脑图,ProcessOn';
echo $msg;

$search = [
	'Xmind软件',
	'百度脑图',
	'ProcessOn'


];

$replace = [
	'<a href="https://www.xmind.cn">Xmind软件</a>',
	'<a href="https://naotu.baidu.com">百度脑图</a>',
	'<a href="https://www.processon.com">ProcessOn</a>',


];




$new_str = str_replace($search, $replace, $msg);
echo '<br>';
echo $new_str;




