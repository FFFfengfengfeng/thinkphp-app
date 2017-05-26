<?php
//数组排序

//sort()数组升序
$nums = array(2, 4, 11, 5, 3, 88, 55);
sort($nums);
print_r($nums);
echo "<br/>";

//rsort()降序排列
rsort($nums);
print_r($nums);
echo "<br/>";

//asort()根据value对数组排序升序
$age = array("小明"=>"25", "小红"=>"22", "小黄"=>"30", "小李"=>"18");
asort($age);
print_r($age);
echo "<br/>";

//ksort()根据key对数组升序排序
$report = array("98"=>"小明", "55"=>"小军", "70"=>"小花");
ksort($report);
print_r($report);
echo "<br/>";

//arsort()根据value对数组降序排序
arsort($age);
print_r($age);
echo "<br/>";

//krsort()根据key对数组降序排序
krsort($report);
print_r($report);
echo "<br/>";
?>