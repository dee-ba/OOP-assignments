<?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.
 // CAR CLASS
     
Class Car {

    // PROPERTIES
    public $owner;
    public $price;
    public $brand;

    // CONSTRUCTOR
    function __construct($owner, $price, $brand){
        $this->owner = $owner;
        $this->price = $price;
        $this->brand = $brand;
    }


}

?>
