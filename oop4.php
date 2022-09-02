<?php

class Animal {
  protected $name;
  
  public function __construct($yourname){
     $this->name = $yourname;
   }
  public function eat(){
       echo "{$this->name} is eating <br>";
       }

  public function run(){
      echo " {$this->name} is running <br>";
       }

  public function sleep(){
      echo " {$this->name} is sleeping <br>";
       }

  public function greet(){} //override

  protected function addTitle($title){
    $this->name = $title . " " . $this->name;
  }
 }


class Human extends Animal{

   public function sayHi(){
    echo " {$this->name} says Hi <br>";
    }

  public function greet(){
    $this->addTitle('Mr.');
    echo "{$this->name} says Hey...<br>";
   } 

}

class Cat extends Animal {
   
 public function greet(){
   echo "{$this->name} says Mewo <br>";
   } 
}


$rasel = new Human('Rasel');
$rasel->greet();
$rasel->eat();
$rasel->sayHi();


$cat1 = new Cat('Tom');
$cat1->run();
$cat1->greet();


