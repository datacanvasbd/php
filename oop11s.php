<?php
// Static Vaiable Scope

class A{
      protected static $name;
      static function sayHi(){
      self::$name="Hello <br>";
      echo "Hi From A </br>";
    }
}


class B extends A{
     static function sayHi(){ // Now possible to overwrite
        parent::sayHi();
        echo parent::$name;
        echo "Hi From B <br>";
            }
}

B::sayHi();
//echo B::$name  ... It's not possible.. possible if public $name

