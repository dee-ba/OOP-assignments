<?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Ride {

    // PROPERTIES
    public $distance;
    public $duration;
    public $day;

    // CONSTRUCTOR
    function __construct($distance, $duration,$day){
        $this->distance= $distance;
        $this->duration= $duration;
        $this->day= $day;
    
    }

    // METHODS

    public function calculateCost(){
        echo $this->distance * 0.50;
    }



}
             

?>
