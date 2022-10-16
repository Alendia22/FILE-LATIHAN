<?php
class Person
{
  protected $name; // method protected dengan identitas tulisan protected.
  protected $age;
 
  public function getName()
  {
    return $this->name;
  }
 
  public function setName($name)
  {
    $this->name = $name;
  }
 
  private function callToPrivateNameAndAge()
  {
    return "{$this->name} is {$this->age} years old.";
  }
 
  protected function callToProtectedNameAndAge()
  {
    return "{$this->name} is {$this->age} years old.";
  }
}
 
class Employee extends Person
{
  private $designation; // method private dengan identitas tulisan private.
  private $salary;
 
  public function getAge()
  {
    return $this->age;
  }
 
  public function setAge($age)
  {
    $this->age = $age;
  }
 
  public function getDesignation()
  {
    return $this->designation;
  }
 
  public function setDesignation($designation)
  {
    $this->designation = $designation;
  }
 
  public function getSalary()// method public dengan identitas tulisan public.
  {
    return $this->salary;
  }
 
  public function setSalary($salary)
  {
    $this->salary = $salary;
  }
 
  public function getNameAndAge()
  {
    return $this->callToProtectedNameAndAge();
  }
}
 
$employee = new Employee();
 
$employee->setName('Muhammad Nur Makhin');
$employee->setAge(20);
$employee->setDesignation(' Sistem Informasi');
$employee->setSalary('20K');
 
echo $employee->getName(); // prints 'Muhammad Nur Makhin'
echo $employee->getAge(); // prints '20'
echo $employee->getDesignation(); // prints 'Sistem Informasi'

echo $employee->getSalary(); // prints '20K'
echo $employee->getNameAndAge(); // prints 'Muhammad Nur Makhin is 20 years old.'
?>
