<?php

class MathCalculator{
      private $number;
      static $name;
      static function fibonacci($n){  // static method
             echo self::$name;     // Static function only access
             self::doSomething();
             echo "Fibonacci series up to {$n} <br>";
              
              }

      static function doSomething(){
                     echo "Doing Something <br>";
                     
        }

      function factorial($n){
            $a = self::$name = "ABCD ";
            self::doSomething();
            $this->doSomething();
            $b = $this->number = 12;
            echo "Calculationg factorial of {$n} and {$a} and {$b} <br>";
          }
}

$mathc = new MathCalculator();
$mathc->factorial(8);


MathCalculator::fibonacci(7);
echo MathCalculator::$name;


