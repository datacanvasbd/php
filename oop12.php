<?php

define('OK', 123); // Constant
const CITY = "Dhaka"; //Constant

echo OK;
echo "<br>";
echo CITY;


class MyClass{
  const BD = "Bangla";

  function sayHi(){
    echo "Hi From ".self::BD;
    echo "<br>";
    echo "Hi From ".$this::BD;
  }
}

$m = new MyClass();
echo "<br>";
echo $m::BD;
echo "<br>";
echo MyClass::BD;
echo "<br>";
$m->sayHi();
