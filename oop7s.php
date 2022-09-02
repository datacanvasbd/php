<?php 

abstract class OurClass{ 

final function doSomething(){  // Final So No Modify
    echo "Doing Something";
}

}

class MyClass extends OurClass{

  /*   function doSomething(){  // Possible this Method Overwrite for final
        echo "Doing Evertything";
    } */   
    
}

$mc = new MyClass();
$mc->doSomething();