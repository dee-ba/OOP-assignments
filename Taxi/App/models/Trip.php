<?php

Class Trip {

    public $time; 
    public $distance;

    public function __construct ($time, $distance){
      $this->time = $time;
      $this->distance = $distance;
    }

    public function cost () {
      return $this->time * 0.17 + $this->distance * 0.50 ;
    } 
  

   }
     
   ?>

