<?php 

// function_exists()
//存在返回T,不存在返回F
//函数名要求以字串形式传入



function demo(){}

var_dump(function_exists('demo'));

//查询某个函数是否被定义(存在)


if (!function_exists('demo')) {
	
	//不存在该函数才会进入花括号内的代码区间,也就是函数体
	function demo(){
		echo '新定义的函数demo...';
	}
}


/*
- get_difined_functions(); 获取所有已定义的函数
- get_loaded_extensions(); 获取所有可用的模块



 */








 ?>