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
$sql = "Select * from user_lists";
$data = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($data)) {
    $records[] = $row;
}
/* Code used to fetch the data */
?>

<html>
    
<link rel="stylesheet" href="css/bootstrap.css" />
<style>
    


td, th {
    background: white;
    color: black;
  border: 1px solid #999;
  padding: 0.5rem;
  text-align: left;
}

#btnn{
    
       right:10%;
       width:100px;
       height:40px;
    color: black;
       margin: 10px;
       background: orange; 
}
</style>
<body>
    <div class="container mt-5">
        <h1 class=" alert-warning text-center mb-5 p-3">
            User Lists
</h1>
<div class="button" > 
<input class="btn btn-primary" type="button" value="Add user" id="btnn">
</div>
<table class="table" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($records as $val) { ?>
        <tr>
            <td><?=$val['id']?></td>
            <td><?=$val['name']?></td>
            <td><?=$val['email']?></td>
            <td><?=$val['phone']?></td>
            <td><?=$val['address']?></td>
            <td><?=$val['city']?></td>
            <td><a href="edit.php?emp_id=<?=$val['id'];?>">Edit</a> | <a href="02_03_2022_delete.php?emp_id=<?=$val['id'];?>">Delete</a></td>
        </tr>
        <?php } ?>
    </tb    ody>
</table>

<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.js"></script>

        </body>
        </html>