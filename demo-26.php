<?php
$con = mysql_connect("localhost", "root", "123456");

if (!$con) {
    die("Could not connect: " . mysql_error());
}

mysql_select_db("person", $con);

$result = mysql_query("SELECT * FROM persons");

while ($row = mysql_fetch_array($result)) {
    echo $row['FirstName'] . $row['LastName'] . ", 今年: " . $row['Age'];
    echo "<br/>"; 
}

mysql_close($con);
?>