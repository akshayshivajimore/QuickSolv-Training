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
$sql = "DELETE FROM user_lists WHERE id=".$_GET['id'];
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
header('user_list.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.js"></script>

        </body>
        </html>