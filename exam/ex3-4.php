﻿<?php
	echo "<B>♣ 증감 연산자의 사용</B><br>";
	echo "------------------------------ <br>";

	$a = 13;
	$b = 8;
		echo "\$a = $a, \$b = $b 의 초기값으로 <br>";
		echo "------------------------------ <br>";

	$c = ++$a - $b--;
		echo "\$c = ++\$a - \$b-- 일 때,<br>";
		echo "\$a = $a, \$b = $b, \$c = $c <br><br>";

	echo "------------------------------ <br>";
	echo "변화된 \$a = $a, \$b = $b 의 값으로 <br>";
	echo "------------------------------ <br>";

	$c = --$a + $b++;  
		echo "\$c = --\$a + \$b++ 일 때,<br>";
		echo "\$a = $a, \$b = $b, \$c = $c <br><br>";
?>