<?php 

/*
 continue 
 		遇到 continue 立即跳出本次循环,进行下一次'
 		作用:用来跳过本次循环中剩余的代码


 */

for ($i=0; $i < 10; $i++) { 
	if ($i ==5) {
		continue;
		echo '6666666';
	}
	echo $i.'<br>';
}





