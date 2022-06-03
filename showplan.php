<?php
include('dbcon.php');
$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$mobile = $mydata['mob'];
$operator = $mydata['op'];
$state = $mydata['state'];
$OPtype = $mydata['OPtype'];

$sql = "INSERT INTO mobile_recharge(mobile_no, operator, state, plan_rs, optype) VALUES('$mobile', '$operator', '$state', '', '$OPtype')";

if($conn->query($sql) == true){
    echo "Registered Sucessfully";
}
else{
    echo "Not Registered";
}
?> 