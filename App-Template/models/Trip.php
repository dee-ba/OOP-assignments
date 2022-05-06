 <?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Trip {

    // PROPERTIES
    public $distance;

    // CONSTRUCTOR
    function __construct($distance){

    }

    // METHODS
    public function distance(){
        echo "We're doing something!";
        echo "<br/> <br/>";
    }

    public function trip($distance){
        echo "We're adding " . $data;
        echo "<br/> <br/>";
    }

    public function admin(){
        echo "We're showing something!";
        echo "<br/> <br/>";
    }

}

?>
