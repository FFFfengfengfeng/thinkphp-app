<?php
$con = mysql_connect("localhost", "root", "123456");

if (!$con) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db("person", $con);

$sql = "DELETE FROM persons WHERE personID = '3'";

if (!mysql_query($sql, $con)) {
    die("Could not delete: " . mysql_error());
} else {
    echo "删除成功";
}

mysql_close($con);
?>