<?php

class Employee extends Person
{
    public $profile;
    
    public function __construct($name, $age, $profile)
    {
        parent::__construct($name,$age);
        $this->profile = $profile;
    }
    
    public function toString()
    {
        parent::toString();
        echo "<br><strong>profilo: </strong>" . $this->profile; 
    }

    //aggiungere un metodo statico factory che valorizza $profile
}



