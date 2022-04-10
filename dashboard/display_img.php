<?php  

$userid = $_SESSION["userId"]; 

$sql = "SELECT * FROM users WHERE idusers = $userid";  

$result = $conn->query($sql);

$img = $result->fetch_assoc(); 

if ($img['userimg']!= NULL)
{
     echo '<img src="data:image/jpeg;base64,'.base64_encode($img['userimg'] ).'" width="100px" height="100px" style="object-fit: cover;">';  
}  
else 
{
     echo '<img src="./img/user.png" width="100px" height="100px" style="object-fit: cover;">';
}
?>