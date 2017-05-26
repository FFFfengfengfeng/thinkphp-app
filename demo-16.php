<?php
//面向对象
class Cars {
    var $car_name;
    var $car_price;
    
    function car_name_setter($car_name) {
        $this->car_name = $car_name;
    }
    function car_name_getter() {
        return $this->car_name;
    }
}

$car = new Cars();
$car->car_name_setter("宝马");
echo $car->car_name_getter() . "<br/>";

//构造函数
//__construct
class Person {
    var $person_name;
    var $person_age;
    function __construct($name, $age) {
        $this->person_name = $name;
        $this->person_age = $age;
    }
    function getter() {
        echo $this->person_name . "今年: " . $this->person_age . "岁<br/>";
    }
}
$person = new Person("锋锋锋", "25");
$person->getter();

//结构函数
//__destruct用于在对象生命周期结束之后将变量销毁

//继承
//关键字extends继承一个类,PHP不支持多继承


?>