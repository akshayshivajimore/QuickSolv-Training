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
 

?>

<html>
    <header>

    <link rel="stylesheet" href="css/bootstrap.css" />
</header>

<body>
<div class="container mt-5">
        <h1 class=" alert-warning text-center mb-5 p-3">
            Add user
        </h1>
        <form method="post" id="myform">
   <div class="modal-body">
       <div class="form-group">
    <input type='text' name='name' placeholder="NAME" id='name'/><br><br>
</div>
<div class="form-group">
    <input type='email' name='email' placeholder="EMAIL" id='email'/><br><br>
</div>
<div class="form-group">
    <input type='text' name='phone' placeholder="PHONE" id='phone' /><br><br>
</div>
<div class="form-group">
    <input type='text' name='address' placeholder="ADDRESS" id='address'/><br><br>
</div>
<div class="form-group">
    <input type='text' name='city' placeholder="CITY" id='city'/><br><br>
</div>
<div class="form-group">
    <input type='text' name='pincode' placeholder="PINCODE" id='pincode' /><br><br>
</div>

<div class="form-group">
    <input type='submit' value='Add' id='btn' class="btn btn-dark" onclick="adduser()"/>
</div>
</div>
    <script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.js"></script>

<script>
    function adduser(){
        var nameAdd=$('#name').val();
        var emailAdd=$('#email').val();
        var phoneAdd=$('#phone').val();
        var addressAdd=$('#address').val();
        var cityAdd=$('#city').val();
        var pincodeAdd=$('#pincode').val();

        $.ajax({
            url:"add_ajax.php",
            type: 'post',
            data: {
                nameSend:nameAdd,
                emailSend:emailAdd,
                phoneSend:phoneAdd,
                addressSend:addressAdd,
                citySend:cityAdd,
                pincodeSend:pincodeAdd
            }
            success:function(data,status){
                //console.log(status);
            }
        });

    }
    </script>
</body>
</html>