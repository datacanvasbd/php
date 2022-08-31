<?php 
class Human{
    public $name; // Property of Human class
    function sayHi(){
        echo " Salam <br>";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name} <br>";
    }

}

class Cat {
    function sayHi(){
        echo "Meow <br>";
    }
}


class Dog {              // Class
    function sayHi(){
        echo "Woof <br>";
    }
}

$h1 = new Human();  // Object
$h1->name = " Azam "; // Set
$h2 = new Human();
$h2->name = "Rafi";
$c1 = new Cat();

$d1 = new Dog();

# echo $h1->name;  // Get
$h1 -> sayHi();  // Method Property
# $h1->sayName();

# echo $h2->name;  // Get
$h2 -> sayHi();  // Method Property
# $h2->sayName();


$c1-> sayHi();
$d1-> sayHi();