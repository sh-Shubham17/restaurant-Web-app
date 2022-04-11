<?php

// development connection 
// for connection to localhost use these commented data
// $servername = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "first_try";


// for deployment 
//remote mysql database connection
$servername = "remotemysql.com";
$dbUsername = "75qefHOCAc";
$dbPassword = "QkkNpupW3Z";
$dbName = "75qefHOCAc";


$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}
