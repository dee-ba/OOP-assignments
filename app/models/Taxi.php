<?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

Class Taxi {

 public $duration; 
 public $distance;
 public $day;


  public function __construct ($duration,$distance,$day){
      $this->duration = $duration;
      $this->distance = $distance;
      $this->day = $day;

  }
  
  public function totalTrips () {
    return $this->trip1 + $this->trip2;
  }
    
    
}
             
    $taxi = new Taxi($duration, $distance, $day);
    $taxi = new Taxi(50, 100, "Tuesday");
    echo $taxi->duration; //echo's 50
    echo $taxi->distance; //echo's 100
    echo $taxi->day;

    $taxi = new Taxi("100", "Tuesday", "Wendsday");

    echo $taxi->duration; //echo's ?? "100".
    echo $taxi->distance; // "tus
?>
