
<?php
//insert.php;

if(isset($_POST["item_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=quicksol", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["item_name"]); $count++)
 {  
  $query = "INSERT INTO order 
  (order_id, item_name, quantity, unit) 
  VALUES (:order_id, :item_name, :quantity, :unit)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':order_id'   => $order_id,
    ':item_name'  => $_POST["item_name"][$count], 
    ':quantity' => $_POST["quantity"][$count], 
    ':unit'  => $_POST["unit"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>
