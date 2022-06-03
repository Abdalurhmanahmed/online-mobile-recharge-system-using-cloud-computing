<?php
include('dbcon.php');
$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$user = $mydata['user'];
$pass = $mydata['pass'];

$sql = "select * from admin where userid = '$user' and pass = '$pass'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){  
    echo 1 ;  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     
?> 