<?php

abstract class Shape{  // Force Using
  abstract function getArea(); // No body but might be implement in child class
  abstract function getPerimeter();

  abstract function eat($v,$v1=0);

  function sayHi(){
    echo "hi";
  }

           }

class Rectangle extends Shape{

  private $base, $height;
 
  function __construct($base, $height){

     $this->base = $base;
     $this->height = $height;

    }


  public function setBase($base){
    $this->base = $base;
      }
  public function setHeight($height){
    $this->height = $height;
      }

  function getArea(){

     return $this->base*$this->height;
    
      }

  function getPerimeter(){
     
   }

   function sayHi(){
    echo "Heee";
  }

  function eat($a,$b){
    echo "Eating"
  }

}


class Triangle extends Shape{

    function sayHi(){
        echo "Hello";
      }
 
  function getArea(){

     return $this->base*$this->height;
    
      }

  function getPerimeter(){
     
   }

   function eat($a1,$b1){
    echo "Eating Something"
  }

}


$rec = new Rectangle(10,10);
echo $rec->getArea();

echo "<br>";
$tri = new Triangle();
$tri->sayHi();
$tri->eat(1,2)