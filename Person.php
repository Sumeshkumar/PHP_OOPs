<?php
Class Person
{
  public $name;
  public $age;
  
  public function setName($name){
    $this->name = $name;
  }
  
  public function getName(){
    return $this->name;
  }
  
  public functin setAge($age){
    $this->age = $age;
  }
  
  public functin getAge(){
    return $this->age;
  }
}

$personObj = new Person();
$personObj->setName('Leonardo');
$personObj->setAge(42);
$name = $personObj->getName();
$age = $personObj->getAge();
echo "My name is: ". $name. " and i am ". $age. " years old";
?>