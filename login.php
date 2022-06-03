<?php
include('dbcon.php');
session_start();
$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$mail = $mydata['mail'];
$pass = $mydata['pass'];

$sql = "select * from registration where EMAIL = '$mail' and PASSWORD = '$pass'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION["name"] = $row['FIRST_NAME'];
$count = mysqli_num_rows($result);

if($count == 1){  
    echo 1 ;  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     
?> 