<?php

class ParentClass{
   protected $name;
   function __construct($myname){
     $this->name = $myname;
     $this->sayHi();
     
    }

   function sayHi(){
      echo "Hi from {$this->name}";
   }

}

class ChildClass extends ParentClass{
    function sayHi(){
             parent::sayHi();
             echo "Hello";
       }
}


$cc = new ChildClass("ABCD");
echo "<br>";
$cc->sayHi();