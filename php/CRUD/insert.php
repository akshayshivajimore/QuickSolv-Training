<?php 
include('dbConnection.php');

$data = stripslashes(file_get_contents("php://input "));
$mydata = json_decode($data, true);
$name = $mydata['name'];
$email = $mydata['email'];
$phone = $mydata['phone'];
$address = $mydata['address'];
$city = $mydata['city'];
$pincode = $mydata['pincode'];

if(!empty($name) && !empty($email) && !empty($phone) && !empty($address) && !empty($city) && !empty($pincode)){
    $sql = "INSERT into user_lists(name, email, phone, address, city, pincode) VALUES
    ('$name', '$email', '$phone', '$address', '$city', '$pincode')";
    if($conn->query($sql) == TRUE){
        echo "student saved successfully";
    } else {
        echo "Unable to save Student";
    }
} else {
    echo "Fill all feilds";
}
?>