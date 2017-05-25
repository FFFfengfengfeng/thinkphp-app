<?php
/*
 * 数据类型
 * String, Integer, Float, Boolean, Array, Object, NULL
 */
 
//字符串
$text = "Hello World";
echo $text . '<br/>'; 

//整型 没有小数的数字
$x = 5985;
var_dump($x);

//浮点数 带小数部分的数字
$y = 13.23;
var_dump($y);
echo "<br/>";

//布尔型
$t = true;
$f = false;

//数组
$cars = array("Volvo", "BMW", "Benz");
var_dump($cars);

//对象
class Person {
    function Person($color = "green") {
        $this -> color = $color;
    }
    function what_color() {
        return $this -> color;
    }
}
?>