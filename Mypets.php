<?php
/*
 * MyPets
 * PHP Version 5.9.9
 * @category PHP Object Oriented concepts - Inheritance
 * @author Sumesh Kumar <sumeshkmp@gmail.com>
 */
include_once 'Dogs.php';
include_once 'Cats.php';
Class MyPets
{
    /**
     * @param void
     * @return void
     */
    function __construct() {
        /**
         * Create Dogs and Cats object
         */
        $dogsObj = new Dogs();
        $catsObj = new Cats();
    }
}

$myPetsObj = new MyPets();

