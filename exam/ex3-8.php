﻿<?php
	echo "<B>♠ 비트, 문자열 혼합 연산의 결과  </B><br>";
	echo "-------------------------------- <br>";

		$a = 5;       
		$a += 3;

		$c = "우리들은 ";
		$c .= "만난지 꼭 ";

		$d = $a >> 3;
		
		echo "$c $d 년째 입니다...";
	?>