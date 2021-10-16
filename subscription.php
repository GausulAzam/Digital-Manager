<?php

$conn = mysqli_connect("localhost", "root", "", "dmanager");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


$business_name =  $_REQUEST['business_name'];
$propriter_name = $_REQUEST['propriter_name'];
$phone_number = $_REQUEST['phone_number'];
$nid_number =  $_REQUEST['nid_number'];
$trade_license = $_REQUEST['trade_license'];
$amount = $_REQUEST['amount'];
$payment = $_REQUEST['payment'];
$package = $_REQUEST['package'];


// Performing insert query execution
// here our table name is subscription
$sql = "INSERT INTO subscription (business_name, propriter_name, nid_number, phone_number, trade_license, amount, payment,
package) 
 VALUES ('$business_name', '$propriter_name','$nid_number', '$phone_number','$trade_license','$amount', '$payment', '$package')";



if(mysqli_query($conn, $sql)){
//    echo "<h3>data stored in a database successfully."
//        . " Please browse your localhost php my admin"
//        . " to view the updated data</h3>";
    echo "<script>location.href='register.html';</script>";


} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>