<?php 
/*
unset();	删除变量
isset();	判断一个变量是否存在 true / false
empty(); 	判断一个变量是否为空 true / false



 */
$a = '';
$a = 0;
$a = 0.0;
$a = '0';
$a = false;
$a = null;
$a = array();
$a = [];

$a;

// 以上这些变量,empty()都会返回false
// 简称 空 零 假


//以上情况除了变量被赋值null的时候变量不存在,其余的情况下,isset()来判断变量是否存在时,都返回true





