<?php

class Fund{
    private $fund;
    
    function __construct($initialFund=0){
      $this->fund = $initialFund;
    }
    public function addFund($money){
        $this->fund += $money;

    }
    // Private function only access including the class
    public function deductFund($money){
      $this->fund -= $money;
    }

    public function getTotal(){
      echo "Total fund is {$this->fund} <br>";
    }

}


$ourFund = new Fund(100);
// $ourFund->fund =30;    if fund public

$ourFund->getTotal();
$ourFund->addFund(500);
$ourFund->getTotal();
$ourFund->deductFund(200); // This Function can access only for public declaration
$ourFund->getTotal();