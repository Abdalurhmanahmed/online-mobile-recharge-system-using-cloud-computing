<?php
include('dbcon.php');
$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$mob = $mydata['mobile'];
$plan = $mydata['plan'];

$sql = "UPDATE mobile_recharge SET plan_rs = '$plan' WHERE mobile_no = '$mob'";

if($conn->query($sql) == true){  
    echo 1 ;  
}       
?> 