<?php
$hostName = "localhost";
$dbUser = "root";
$bdPass = "";
$dbName = "crud";

$conn = mysqli_connect($hostName, $dbUser, $bdPass, $dbName);
if (!$conn) {
    die("Something went to wrong;");
}
