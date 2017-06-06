<?php
$con = mysql_connect("localhost", "root", "123456");

if (!$con) {
    die("Could not connect: " . mysql_error());
}

mysql_select_db("fd", $con);

$result = mysql_query("SELECT * FROM agent WHERE name='李磊'");

while ($row = mysql_fetch_array($result)) {
    echo $row['name'] . $row['value'];
    echo "<br/>";
}

mysql_close($con);
?>