<?php

Class Cost {

    public $time; 
    public $distance;
    public $day;
   
   
     public function __construct ($time,$distance, $day){
         $this->time = $time;
         $this->distance = $distance;
         $this->day = $day;
        
   
     }
     
     public function calculateCosts () {
       return $this->time* 0.17 + $this->distance*0.50 ;
     }

     
       
       
   }
                
     
   ?>

