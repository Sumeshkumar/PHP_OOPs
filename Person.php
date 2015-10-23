<?php
/**
 * Person
 * PHP version 5.5.9
 * @category PHP Object Oriented Concepts
 * @author   Sumesh Kumar <sumeshkmp@gmail.com>
 */ 
Class Person
{
  public $name;
  public $age;
  
  /**
   * @param string $name
   * @return void
   */
  public function setName($name){
    $this->name = $name;
  }
  
  
  /**
   * @return string
   */
  public function getName(){
    return $this->name;
  }
  
  
  /**
   * @param int $age
   * @return void
   */
  public function setAge($age){
    $this->age = $age;
  }
  
  
  /**
   * @return int
   */
  public function getAge(){
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