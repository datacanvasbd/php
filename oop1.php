<?php 
class Human{
    function sayHi(){
        echo "Salam <br>";
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

$c1 = new Cat();

$d1 = new Dog();


$h1 -> sayHi();  // Method Property
$c1-> sayHi(); // Method Property
$d1-> sayHi();