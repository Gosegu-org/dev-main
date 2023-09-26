<?php
echo "<B>구구단</B><br>";
echo "<hr>";

for ($a = 9; $a >= 2; $a--) {
    for ($b = 9; $b >= 1; $b--) {
        $gob = $a * $b;
        echo "{$a} x {$b} = {$gob} &nbsp;&nbsp; ";
    }
    echo "<br><br>";
}
?>