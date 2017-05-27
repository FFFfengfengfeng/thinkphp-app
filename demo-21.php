<?php
//文件上传
//$_FILES

if ($_FILES["filesname"]["error"] > 0) {
    echo "错误" . $_FILES["filesname"]["error"] . "<br/>";
} else {
    echo "文件名: " . $_FILES["filesname"]["name"] . "<br/>";
    echo "文件类型: " . $_FILES["filesname"]["type"] . "<br/>";
    echo "文件大小: " . ($_FILES["filesname"]["size"] / 1024) . "<br/>";
    echo "文件临时存储的位置: " . $_FILES["filesname"]["tmp_name"] . "<br/>";
}
?>