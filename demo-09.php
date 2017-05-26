<?php
//数组
$cars = array("宝马", "奔驰", "奥迪");
echo "我想买" . $cars[0] . "和" . $cars[1] . "<br/>";

for ($i=0; $i < count($cars); $i++) { 
	echo $cars[$i] . "<br/>";
}

//php关联数组
$age = array("李磊"=>"25", "韩梅梅"=>"22", "小红"=>"27");
foreach ($age as $key => $value) {
	echo $key . "今年是: " . $value . "岁" . "<br/>";
}
?>