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
<html>>
<head>
<script>

    $("#btn").click(function(e){
        e.preventDefault();
            let nm = $("#name").val();
            let em = $("#email").val();
            let ph = $("#phone").val();
            let ad = $("#address").val();
            let ct = $("#city").val();
            let pc = $("#pincode").val();

            mydata = { name: nm, email: em, phone: ph, address: ad, city: ct, pincode: pc}
            $.ajax({
                url: "update_ajax.php",
                method: "POST",
                data: JSON.stringify(mydata),
                sucess: function(data){
                    msg = "<div>"+ data + "</div>";
                    $('#msg').php(msg);
                $("#myform")[0].reset();
                },
            });
        });
    
    </script>
</head>
<body>
<form>
  <div class="form-row">
  <div class="form-group col-md-6">
     <div> 
      <input type="text" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      
      <input type="phone" class="form-control" id="phone" placeholder="Contact">
    </div>
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="address" placeholder="Address">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="city" placeholder="Cityr">
  </div>

  <div class="form-group">
    
    <input type="text" class="form-control" id="city" placeholder="Pincode">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>