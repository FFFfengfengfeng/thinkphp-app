<?php
//while循环
$i = 1;
while ($i < 5) {
    echo "The number is " . $i . "<br/>";
    $i ++;
}

//do...while循环
//计算100以内偶数和
$num = 1;
$result = 0;
do {
    if ($num % 2 == 0) {
        $result += $num;
    }
    $num ++;
} while ($num <= 100);
echo $result;
?>