<?php
$con = mysql_connect("localhost", "root", "123456");

if (!$con) {
    die("Could not connect: " . mysql_error());
}

mysql_select_db("person", $con);

$sql = "INSERT INTO persons (FirstName, LastName, Age) VALUES ('何', '浩锋', '26')";

if (!mysql_query($sql, $con)) {
    die("Could not insert into persons " . mysql_error());
}

mysql_close($con);
?>