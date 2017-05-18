<?php
$a = 5;
$b = 6;
$c = $a + $b;
echo $c;

/*
 * 局部和全局作用域 
 */
 
//全局变量
$x = 5;

function myTest() 
{
    //局部变量
    $y = 6;
    global $x;
    echo "局部变量y: " . $y . "<br/>";
    echo "全局变量x: " . $x . "<br/>";
}

myTest();

/*
 * static作用域
 */
function staticScope()
{
   static $staticVoid = 0;
   echo "函数运行了" . $staticVoid . "次<br/>";
   $staticVoid ++;
}

staticScope();
staticScope();
staticScope();

/*
 * 参数作用域
 */
function argScope($aa)
{
    echo $aa . "<br/>";
}
argScope(5);
?>