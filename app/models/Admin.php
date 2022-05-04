<?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Admin {

 public $distance;
 public $duration;



  methods
  public function __construct ($distance,$duration){
      $this->distance = $distance;
      $this->duration = $duration;

  }
  
  public function () {
    
  }
    
}
             

?>
