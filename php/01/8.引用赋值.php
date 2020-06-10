<?php 
$a = 10;
$b = $a;
$b = 123;


echo 'a: '.$a;
echo '<br>';
echo 'b: '.$b;

echo "<br>";
echo "<hr>";

//引用赋值	& 赋值变量关系

$o = 10;
$p = &$o;
$p = 123;


echo 'o: '.$o;
echo '<br>';
echo 'p: '.$p;

unset($o);
//删除变量$o,另一个变量依旧可以用






