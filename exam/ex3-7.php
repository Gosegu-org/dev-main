﻿<?php
	echo "<B>♠ 대입, 비트 혼합 연산의 결과  </B><br>";
	echo "-------------------------------- <br>";

		$a = 8;       
			echo "\$a = 8 일 때, <br><br>";

		$b = $a * ($a++ >> 3);    
			echo "\$b = \$a * (\$a++ >> 3)의 연산결과 <br> ";
			echo " ... <B>\$a = $a, \$b = $b </B><br><br>";

		$c = ++$a - $b--;
			echo "\$c = ++\$a - \$b-- 의 연산결과 <br> ";
			echo " ... <B>\$a = $a, \$b = $b, \$c = $c</B> <br>";
	?>