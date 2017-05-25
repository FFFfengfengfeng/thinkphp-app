<?php
//常量
define("BMW", "宝马");
echo BMW;

//常量是全局的
define("APP_ID", "555555555");
function getID() {
    echo APP_ID;
}
getID();
?>