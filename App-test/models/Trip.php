<?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Trip {

    // PROPERTIES
    public $ride;
    
    

    // CONSTRUCTOR
    function __construct($noOfTrips){
        $this->noOfTrip= $noOfTrip;
            
    }

    // METHODS
    public function trip(){
        echo $this->noOfTrip
    }

    
    
}
             

?>
