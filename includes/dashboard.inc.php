<?php
require 'dbh.inc.php';
$id=$_SESSION['userId'];

$sql = "SELECT * FROM users WHERE idusers=$id";
$result = $conn->query($sql);

$details = $result->fetch_assoc();    

?>
