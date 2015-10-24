<?php
/*
 * Dogs
 * PHP Version 5.9.9
 * @category PHP Object Oriented concepts - Inheritance
 * @author Sumesh Kumar <sumeshkmp@gmail.com>
 */
include_once 'Pets.php';
Class Dogs extends Pets
{
    /**
     * @param void
     * @return void
     */
    public function __construct()
    {
        echo 'Dogs '. $this->fourLegs();
        echo '<br />';
        echo $this->makeSound('Bow Bow');
        echo '<br />';
        
        $this->guardHouse();
    }
    
    /**
     * @param void
     * @return void
     */
    private function guardHouse()
    {
        echo "Dogs gurd house";
        echo '<br />';
    }
}


