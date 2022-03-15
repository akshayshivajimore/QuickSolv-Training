
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quicksol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST))
{
$sql = "INSERT INTO pesons (firstname, lastname, address, city, gender, hobbies)
VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['address']."','".$_POST['city']."','".$_POST['gender']."','".$_POST['hobbies']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
  /* Code used to fetch the data */
$sql = "Select * from Pesons";
$data = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($data)) {
    $records[] = $row;
}
?>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Addres</th>
            <th>City</th>
            <th>Gender</th>
            <th>City</th>
</tr>
</thead>
<tbody>
    <?php foreach($records as $val) { ?>
    <tr>
        <td><?=$val['PersonID']  ?></td>
        <td><?=$val['FirstName']  ?></td>
        <td><?=$val['LastName']  ?></td>
        <td><?=$val['Address']  ?></td>
        <td><?=$val['City']  ?></td>
        <td><?=$val['gender']  ?></td>
        <td><?=$val['Hobbies']  ?></td>
        <td><a hred="edit.php?PersonId=<?=$val['PersonID'];?>">Edit</a> | <a href="delete.php?PersonId=<?=$val['PersonID'];?>">Delete</a></td>
    </tr>
<?php } ?>
    </tbody>
    </table>