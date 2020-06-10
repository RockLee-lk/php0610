变量的数据类型
	标量型: 布尔型 boolean	整型 int 	浮点型 float 	字符串 string 
	符合类型: 数组 array 		对象 object
	特殊类型: 空 null 		资源 resource

布尔型: true / false
	用于判断,部分会区分大小写
	以下这些值会被认为是false: 整型 0 布尔值 false 浮点 0.0 空字符串 '' "" 空 null 空数组 array()

整型: int 
	任意的整数都算是整型,它是有范围的.超出范围后,自动转换为浮点型 float

浮点型: float
	简单来说就是小数

字符串: string
	可以理解为,一串字
	三种表达方式: 1.单引号 2.双引号 3.定界符

	1.单引号:
		不解析变量,单引号内不能包含单引号,如需使用单引号,使用\转义符,在单引号中,只能转义单引号和本身,若试图转义其他字符,则无效且转义符本身显示
		(转义符就是反斜线\,作用就是将特殊意义的字符进行转义,使其失去原来的功能)

		单双引号可以互相嵌套

	2.双引号:
		区别于单引号的地方:能解析变量,可以解析特殊字符

	3.定界符
```
$str = <<<ppp
....
....
ppp;(这里要顶格写)
```
	
	4.数组 array
	5.对象 object
	6.资源 resource
	7.空 null
		这里的null指的空不是空格的意思,不表示0,也不表示''和""
		以下情况:
				1.被赋值为null
				2.尚未赋值的变量就是null
				3.被unset()掉的变量也是null
				4,调用一个函数时,无返回值的时候,默认返回null

类型判断函数: is_int() 	is_string()

类型转换函数: (int)$a 或 settype($a,'int')

常量:
	语法: 不要使用$,不要和变量的语法混淆
	①define('常量名','常量值','是否区分大小写')
	②const 常量名 = 常量值
		1.值只能是标量,7.0版本以后可以使用数组
		2.参数3是可选参数,默认为false(代表区分大小写),而设置为true(代表不区分大小写)
		3.一般常量名总是大写
		4.常量一旦被定义,不可更改值,不可重复定义

	判断常量是否存在的一个函数:
		defined('字符串'),参数必须是字串名

	了解一下什么是预定义常量,魔术常量