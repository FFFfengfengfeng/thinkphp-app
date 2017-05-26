<?php
//条件语句
$score = 40;

//if
if ($score > 60) {
    echo "及格";
}

//if...else
if ($score > 60) {
    echo "及格";
} else {
    echo "不及格";
}
echo "<br/>";
//if...else if...else
if ($score > 90) {
    echo "优秀";
} else if ($score >= 60 && $score < 90) {
    echo "及格";
} else {
    echo "不及格";
}

echo "<br/>";
//switch
function getCars($car) {
    switch ($car) {
        case "宝马":
            echo "宝马";
            break;
        case "奔驰":
            echo "奔驰";
            break;
        case "奥迪":
            echo "奥迪";
            break;
        case "大众":
            echo "大众";
            break;
    }
}
getCars("宝马");

?>