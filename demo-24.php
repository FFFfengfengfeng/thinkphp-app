<?php
$con = mysql_connect('localhost', 'root', '123456');
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
//
//if (mysql_query("CREATE DATABASE person", $con)) {
//  echo "person created";
//} else {
//  echo "Error creating database: " . mysql_error();
//}

mysql_select_db("person", $con);

$sql = "CREATE TABLE persons
(
    personID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(personID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";

mysql_query($sql, $con);

mysql_close($con);
?>