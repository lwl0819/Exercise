<?php
namespace Customers\Block;

use Customers\Customer;

class Blocklist extends Customer {

  protected $state;
        
  public function setState($state){
    $this->state = $state;
    return "Complete...";
  }
        
  public function getState(){
    return $this->state;
  }
}
?>