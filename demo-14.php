<?php
//PHP函数
function write_name($name) {
    echo "Hello " . $name;
}
write_name("锋锋");
echo "<br/>";

function write_br() {
    echo "<br/>";
}


//魔术变量
//_LINE_所在的行数
echo "这是第: " . __LINE__ . "行";
write_br();

//__FILE__文件所在绝对路径
echo "文件在" . __FILE__;
write_br();

//__DIR__文件目录
echo "文件的目录是: " . __DIR__;
write_br();

//__FUNCTION__函数名字
function add($x, $y) {
    echo "函数的名字: " . __FUNCTION__;
    write_br();
    return $x + $y;
}
echo add(3, 4);
write_br();

//__CLASS__返回类的名字
class Person {
    function getClassName() {
        echo "类的名字是: " . __CLASS__;
        write_br();
    }
}
$person = new Person();
$person->getClassName();

//__TRAIT__代码复用

//__METHOD__返回类的方法被定义的时候的名字

//__NAMESPACE__当前命名空间的名字

echo "当前的命名空间: " . __NAMESPACE__;
?>