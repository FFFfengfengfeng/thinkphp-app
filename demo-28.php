<?php
$con = mysql_connect("localhost", "root", "123456");

if (!$con) {
    die("Could not connect: " . mysql_error());
}

mysql_select_db("person", $con);

$sql = "UPDATE persons SET FirstName = '梁', LastName = '慧文' WHERE FirstName = 'aa'";

if (!mysql_query($sql, $con)) {
    die("Could not update: " . mysql_error());
} else {
    echo "修改成功!";
}

mysql_close($con);
?>