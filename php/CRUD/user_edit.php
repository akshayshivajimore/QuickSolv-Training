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


$sql = "Select * from user_lists where id = ".$_GET['id']." LIMIT 1";

$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($data);


?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
    <div class="container">
<form method="post" action="user_list.php" id="myform">
   
    <input type='text' name='name' value="<?=$row['name']; ?>" /><br><br>

    <input type='email' name='email' value="<?=$row['email']; ?>" /><br><br>

    <input type='text' name='phone' value="<?=$row['phone']; ?>" /><br><br>

    <input type='text' name='address' value="<?=$row['address']; ?>" /><br><br>

    <input type='text' name='city' value="<?=$row['city']; ?>" /><br><br>

    <input type='text' name='pincode' value="<?=$row['pincode']; ?>"/><br><br>

    <input type='submit' value='update' id='btn'/>
</div>
    
</form>

<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>