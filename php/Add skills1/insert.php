<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=quicksol", "root", "");

if(isset($_POST["name"]))
{
 $skill = implode(", ", $_POST["skill"]);

 $data = array(':programmer_name'  => $_POST["name"],':programmer_skills'  => $skill);

 $query = "INSERT INTO skills (programmer_name, programmer_skills) VALUES (:programmer_name, :programmer_skills)";

 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  echo '<div class="alert alert-success"> Data Successfully Inserted </div>';
 }
}
?>
