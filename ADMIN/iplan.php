<?php
include('dbcon.php');
$data = stripcslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$price = $mydata['pr'];
$data = $mydata['da'];
$days = $mydata['day'];
$call = $mydata['call'];
$otype = $mydata['type'];
$sql = "INSERT INTO plan(plan_rs, data, days, call_type, otype) VALUES('$price', '$data', '$days', '$call', '$otype')";

if($conn->query($sql) == true){
    echo "Inserted Sucessfully";
}
else{
    echo "Not Inserted";
}
?> 