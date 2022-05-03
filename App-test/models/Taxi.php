<?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Taxi {

  
    public $distance;
    public $time;
    

    function __construct($distance, $time){
    $this->distance= $distance;
    $this->time=$time;

    }
   
    function trip(){
        $this->distance * noOfD
    }

   
    
}
             

?>
