<?php
//运算符
$x = 2;
$y = 3;

//加法
echo $x + $y . "<br/>";

//减法
echo $x - $y . "<br/>";

//乘法
echo $x * $y . "<br/>";

//除法
echo $x / $y . "<br/>";

//模
echo $y % $x . "<br/>";

//取反
echo -$x . "<br/>";

//并置
echo $x . $y . "<br/>";


//数组运算符
$arr1 = array("a"=>"red", "b"=>"blue");
$arr2 = array("c"=>"green");

$arr3 = $arr1 + $arr2;
var_dump($arr3);
echo "<br/>";

$car1 = array("BMW", "Benz");
$car2 = array("Audi");

$car3 = $car1 + $car2;
var_dump($car3);
echo "<br/>";
//三目运算
function score($score) 
{
    return $score > 60 ? "及格" : "不及格";
}

echo score(70);
echo "<br/>";

//逻辑运算
$right = true;
$warn = false;

echo $right || $warn ? "其中一个为真" : "两个都不为真"; //或
echo "<br/>";
echo $right && $warn ? "两个都是真" : "两个不全是真"; //与
echo !$right; //非

?>