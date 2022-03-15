<?php
class Department{
  // Properties
  private $dName;


}


class Employee extends Department {
  // Properties
  private $name;
  private $email;
private $address;
  private $city;

  // Methods

}

class EmployeeSalary extends Employee {
  // Properties
 private $salary;

  // Methods
  function set_sal($salary) {
    $this->salary = $salary;
  }
  function get_sal() {
    return $this->salary;
  }
}
// Methods
   function set_name($dName) {
    $this->name = $dName;
  }
  function get_name() {
    return $this->name;
  }


   function set_nam($name) {
    $this->name = $name;


  }
  function get_nam() {
    return $this->nam;
  }

 function set_email($email){
$this->email = $email;
}
 function get_email() {
return $this->email;
}
function set_add($address){
$this->address = $address;
}
 function get_add() {
return $this->address;
}

function set_city($city){
$this->city = $city;
}
 function get_city() {
return $this->city;
}
$Department = new Department();
   $Department->set_name('computer');
   $dName = $Department->get_name();
   echo $dName;

$Employee = new Employee();
   $Employee->set_nam('Akshay');
$Employee->set_email('akshay@gmail.com');
$Employee->set_add('Ghansoli');
$Employee->set_city('Mumbai');

   $name = $Employee->get_nam();
$email = $Employee->get_email();
$address = $Employee->get_add();
$city = $Employee->get_city();

   echo $name;
echo $email;
echo $address;
echo $city;


$EmployeeSalary = new EmployeeSalary();
   $EmployeeSalary->set_sal('200000');
   $salary = $EmployeeSalary->get_sal();
   echo $salary;
?>