<?php
function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo "Addition of two number is :".addNumbers(5, 5)."<br>"; 

  function subNumbers(int $a, int $b){
    return $a - $b;
  }
  echo "Subtraction of two number is : ".subNumbers(5, 5)."<br>"; 

  function mulNumbers(int $a, int $b) {
    return $a * $b;
  }
  echo "multiplication of two number is : ".mulNumbers(5, 5)."<br>"; 

  function divNumbers(int $a, int $b){
    return $a / $b;
  }
  echo "dividation of two number is : ".divNumbers(5, 5)."<br>"; 
  function remNumbers(int $a, int $b){
    return $a % $b;
  }

  echo "Reminder of wo number is : ".remNumbers(6, 5)."<br>"; 
?>
