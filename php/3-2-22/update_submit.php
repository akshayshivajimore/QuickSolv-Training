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
/* This code is used to connect with database */
if(!empty($_POST)) {

    $sql = "UPDATE * from crud;

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}