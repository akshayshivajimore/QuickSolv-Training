<?php
$connect = new PDO("mysql:host=localhost;dbname=quicksol", "root", "");
if(isset($_POST['displaySend'])){
    $table='<table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">id</th>
    <th scope="col">Programmer Name</th>
    <th scope="col">Programmer Skills</th>
    </tr>
    </thead>';



    $sql="select * from `skills`";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['programmer_name'];
        $skill=$row['programmer_skills'];
        $table.='<tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$skill.'</td>
        </tr>';
}
$table.='</table>';
echo $table;
}

?>