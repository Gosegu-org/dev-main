﻿<?php
	echo "정수의 오버플로우 형 변환 <br>";
	echo "------------------------------------------- <br>";

		$num = 2147483647;
		echo "변수 \"\$num\" 의 출력결과 : ";
		var_dump($num);    //선언된 변수의 데이터형과 값 출력
		echo "<br>.........[정수형으로 출력]<br><br>";

		$num += 1;  
		echo "변수 \"\$num +1\" 의 출력결과 : ";
		var_dump($num);    //선언된 변수의 데이터형과 값 출력
		echo "<br>.............[실수형으로 출력]<br><br>";
?>