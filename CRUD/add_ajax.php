<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['emailSend']) 
&& isset($_POST['phoneSend']) && isset($_POST['addressSend']) 
&& isset($_POST['citySend']) && isset($_POST['pincodeSend'])){
  $sql="insert into `user_lists` (name,email,phone,address,city,pincode) 
  values('$nameSend','$emailSend','$phoneSend','$addressSend','$citySend','$pincodeSend')"

  $result=mysqli_query($conn,$sql);
}

?>