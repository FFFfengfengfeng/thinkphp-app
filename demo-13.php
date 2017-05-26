<?php
//for循环
//for ($i= 0; $i < 100; $i++) { 
//	echo $i % 2 != 0 ? "<br/>" : $i;
//}

//foreach循环
$score = array("小明"=>"60", "小李"=>"75", "小军"=>"92", "小輝"=>"42");
arsort($score);
foreach ($score as $key=>$value) {
    $result = $key . "的分数是: " . $score[$key] . ",评级: ";
    if ($score[$key] > 90) {
        echo  $result . "优秀<br/>";
    } else if ($score[$key] < 90 && $score[$key] >= 60) {
        echo $result . "及格<br/>";
    } else {
        echo $result . "不及格<br/>";
    }
}
?>