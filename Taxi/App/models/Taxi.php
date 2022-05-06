<?php

Class Taxi {

    public $name; 
    public $trips;

    public function __construct ($name){
        $this->name = $name;
        $this->trips = [];
    }

    //add a trip to this objects trip array.
    public function addTrip ($trip){
        array_push($this->trips, $trip);
    } 

    //calculate the total revenue.
    public function revenue(){
        
        //set the revenue to 0;
        $totalRevenue = 0;
        
        //loop through all the trips in this object's $trips array.
        foreach($this->trips as $trip){
            //add the cost of each trip to the total revenue.
            $totalRevenue += $trip->cost();
        }

        //return the total revenue.
        return $totalRevenue;

    }

   }
                
     
   ?>

