<?php
echo "<B>while문을 활용한 5의 배수의 합 출력</B><br>";
echo "<hr>";

$sum = 0;
$num = 1;

while ($num <= 100) {
    if ($num % 5 == 0) {
        $sum += $num;
    }
    
    $num++;
}

echo "5의 배수의 합 : {$sum}";
?>