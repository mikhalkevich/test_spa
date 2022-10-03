<?php
$dblocation = "172.19.0.1"; //172.19.0.1  //192.168.100.7
$dbname = "comments";
$dbuser = "root";
$dbpasswd = "helloworld";
$dbport = 6603;
$conn = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname, $dbport);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

