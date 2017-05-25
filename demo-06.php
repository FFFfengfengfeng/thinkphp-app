<?php
//字符串变量
$text = "Hello World!";
echo $text . "<br/>";

//并置运算符
//字符串拼接, '.'相当于js的+
$text1 = "Hello";
$text2 = "FFF";
echo $text1 . " " . $text2 . "<br/>";

//strlen()函数,返回字符串的长度
echo strlen($text) . "<br/>";

//strpos()函数,返回匹配的位置,相当于indexOf
echo strpos($text, "He");
?>