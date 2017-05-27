<?php
//文件处理
//fopen()函数用于在php中打开文件
$file = fopen("welcome.txt", "r") or exit("Unable to open file!");

file_put_contents("welcome.txt", "222");

while (!feof($file)) {
    echo fgets($file) . "<br/>";
}
fclose($file);
?>