<?php
include('dbcon.php');

$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$fname = $mydata['fn'];
$lname = $mydata['ln'];
$pass = $mydata['pas'];
$email = $mydata['mail'];
$phone = $mydata['phon'];
$answer = $mydata['anser'];

$sql = "INSERT INTO registration(FIRST_NAME, LAST_NAME, PASSWORD, EMAIL, PHONE, ANSWER) VALUES('$fname', '$lname', '$pass', '$email', '$phone', '$answer')";
if($conn->query($sql) == true){
    echo "Registered Sucessfully";
}
else{
    echo "Not Registered";
}
?> 