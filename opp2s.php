<?php 

class Human{
    public $name;
    public $age;

    public function __construct($personeName, $personeAge=0){  
          // Parameter pass is not Mendatary
          // =0 default if not passign argument 
          // Construct Function which auto call when start programme
        // echo "New Human Object is created <br>"
        $this->name = $personeName;
        $this->age = $personeAge;
    }
    function sayHi(){
        echo "Hi! ";
        $this->sayName();
    }

    function sayName(){
        if ($this->age){
        echo "My Name is {$this->name} I am {$this->age} years old <br>";
        }
        else {
            echo "My Name is {$this->name} <br>";
        }
    }
}

$h1 = new Human('Azam', 20); // $h1 is Human object  Azam is agrument
$h2 = new Human("Rafi", 25);
$h3 = new Human("Rajon");


$h1->sayHi();
$h2->sayHi();
$h3->sayHi();