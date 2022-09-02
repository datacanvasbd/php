<?php

interface BaseAnimal{
   function isAlive(); // No Body at all
   function canEat($param1, $param2); // Passing Two Argument
   function breed();

}


class Animal implements BaseAnimal{ // Class cann't extend interface only implements

   function isAlive(){}
   function canEat($param1, $param2){}
   function breed(){}

}


interface BaseHuman extends BaseAnimal{ // Only interface extends another interface
   public function canTalk();

 }

class Human implements BaseHuman{

    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk(){}  // Also call this method

}


$h = new Human();
$h instanceof Animal;  // By instanceof shown result 0 or none that means False
$aa =($h instanceof BaseAnimal);  // By instanceof shown result 1 that means it's True

if($aa==True){
    echo "It's True";
}
else {
    echo "It's False";
}


$cat = new Animal();
echo $cat instanceof Human; // False


// This is called polymorpisms because it represt at time more option
