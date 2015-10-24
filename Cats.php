<?php
/*
 * Cats
 * PHP Version 5.9.9
 * @category PHP Object Oriented concepts - Inheritance
 * @author Sumesh Kumar <sumeshkmp@gmail.com>
 */
include_once 'Pets.php';
Class Cats extends Pets
{
    /**
     * @param void
     * @return void
     */
    public function __construct()
    {
        echo 'Cats '. $this->fourLegs();
        echo '<br />';
        echo $this->makeSound('Meow Meow');
        echo '<br />';
        
        $this->ownHouse();
    }
    
    /*
     * @param void
     * @return void
     */
    private function ownHouse()
    {
        echo 'I want fish fry today morning for my breakfast';
        echo '<br />';
    }
}


