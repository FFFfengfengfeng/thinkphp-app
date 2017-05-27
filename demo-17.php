<?php
$name = $_POST["name"];
$sex = $_POST["sex"];

if ($sex == "man") {
    echo "欢迎" . $name . "男士";
} else {
    echo "欢迎" . $name . "女士";
}
?>