<?php

class A{
    static function sayHi(){
      echo "Hi From A </br>";
}
}


class B extends A{
    // function sayHi(){   ** Without static not possible to overwrite
      // echo "Hi From B <br>";
       //     }

     static function sayHi(){ // Now possible to overwrite
       echo "Hi From B <br>";
       parent::sayHi();
            }
}

B::sayHi();
