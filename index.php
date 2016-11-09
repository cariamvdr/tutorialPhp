<?php
	class Person {
        private $name;
        private $age;
             
        private function __construct()
        {
            
        }               
        
			public static function generatePersonByName($name)
			{
				$item = new static();
				$item->name = $name;
		 
				return $item;
			}
		 
		 
			public static function generatePersonByAge($age)
			{
				$item = new static();
				$item->age = $age;
		 
				return $item;
			}
			
			public static function generatePersonByNameAge($name, $age)
			{
				$item = new static();
				$item->name = $name;
				$item->age = $age;
		 
				return $item;
			}
		
		
		private function get_age(){
            return $this->age;               
        }
             
        public function print_age(){
            return $this->get_age();
        }
     
		
		private function get_name(){
            return $this->name;               
        }
             
        public function print_name(){
            return $this->get_name();
        }

		public function toString_age(){
            echo "<br><strong>età: </strong>".$this->get_age();
        }
		
		public function toString_name(){
            echo "<br><strong>nome: </strong>".$this->get_name();
        }
		
		public function toString(){
			$this->toString_name();
			$this->toString_age();
		}
		
	}
	
	$attilio = Person::generatePersonByName("Attilio");
	$pietro = Person::generatePersonByAge(24);
	$davide = Person::generatePersonByNameAge("Davide",25);
	
	$attilio->toString_name();
	$pietro->toString_age();
	$davide->toString();
?>