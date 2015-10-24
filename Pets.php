<?php
/**
 * Pets
 * Inheritance example
 * PHP Version 5.9.9
 * @category PHP Object Oriented Concepts
 * @author Sumesh Kumar <sumeshkmp@gmail.com>
 */
Class Pets
{
    protected $sound;    
    
    /**
     * @param void
     * @return string
     */
    protected function fourLegs()
    {
        return "Walks on four legs";
    }
    
    /**
     * @param string $sound
     * @return string $sound
     */
    protected function makeSound($sound)
    {
        $this->sound = $sound;
        return $sound;
    }
}


