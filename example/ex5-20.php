﻿<?php

echo "<B> ※ 아스키코드 값을 이용한 알파벳 출력 chr( ) 함수 </B> <br>";
echo "--------------------------------------------------------------- <br>";

echo "■ 알파벳 대문자 A~Z 출력 <br>";

for($a = 65; $a <= 90; $a++)
{
	echo chr($a);
	echo "  ";
}
echo "<br> --------------------------------------------------------------- <br>";

echo "■ 알파벳 소문자 a~z 출력 <br>";

for($a = 97; $a <= 122; $a++)
{
	echo chr($a);
	echo "  ";
}
echo "<br> --------------------------------------------------------------- <br>";

?>