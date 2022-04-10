<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "for_table";

$dbusername = "root";
$conn = mysqli_connect($servername,$dbusername,$dbpassword ,$dbname);

if(!$conn) {
    die("connection failed:" .myqli_connect_error());
}