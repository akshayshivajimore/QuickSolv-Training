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
 

$sql = "Select * from user_lists";
$data = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($data)) {
    $records[] = $row;
}


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
<a href="add_user.php" class="btn btn-dark my-4">Add User

</a>
<table class="table" >
<thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Pincode</th>
      <th scope="col">Action</th>
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
            <td><?=$val['pincode']?></td>
            <td><a href="user_edit.php?id=<?=$val['id'];?>">Edit</a> | <a href="delete.php?id=<?=$val['id'];?>">Delete</a></td>
        </tr>

        <?php } ?>
    </tbody> 
</table>
<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.js"></script>

        </body>
        </html>