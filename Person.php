<?php
public class Person 
{
    private $name;
    private $age;
    
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }  
    
    public static function generatePersonByName($name)
    {
        $item       = new static();
        $item->name = $name;
        
        return $item;
    }
    
    
    public static function generatePersonByAge($age)
    {
        $item      = new static();
        $item->age = $age;
        
        return $item;
    }
    
    public static function generatePersonByNameAge($name, $age)
    {
        $item       = new static();
        $item->name = $name;
        $item->age  = $age;
        
        return $item;
    }
    
    
    private function get_age()
    {
        return $this->age;
    }
    
    public function print_age()
    {
        return $this->get_age();
    }
    
    
    private function get_name()
    {
        return $this->name;
    }
    
    public function print_name()
    {
        return $this->get_name();
    }
    
    public function toString_age()
    {
        echo "<br><strong>età: </strong>" . $this->get_age();
    }
    
    public function toString_name()
    {
        echo "<br><strong>nome: </strong>" . $this->get_name();
    }
    
    public function toString()
    {
        $this->toString_name();
        $this->toString_age();
    }
    
}

?>