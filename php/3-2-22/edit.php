<?php

/* This code is used to connect with database */
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

/* Code used to fetch the data */
$sql = "Select * from crud";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($data);
?>
<form method="post" action="update_submit.php">
    <label>Name</label>
    <input type='text' name='name' value="<?=$row['name']; ?>"/>

    <label>Email</label>
    <input type='text' name='email' value="<?=$row['email']; ?>"/>

    <label>Phone</label>
    <input type='text' name='phone' value="<?=$row['phone']; ?>"/>

    <label>Address</label>
    <input type='text' name='salary' value="<?=$row['address']; ?>" />

    <label>City</label>
    <input type='text' name='city' value="<?=$row['city']; ?>"/>

    <label>pincode</label>
    <input type='text' name='city' value="<?=$row['pincode']; ?>"/>

    <input type="hidden" name='emp_id' value="<?=$_GET['emp_id'];?>" />

    <input type='submit' value="Update" />
</form>