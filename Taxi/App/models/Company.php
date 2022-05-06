<?php

Class Company {

   public $taxi; 

   public function __construct ($taxi = []) {
      $this->taxi = $taxi;
   }

   public function taxiNames() {
      return $this->taxi;
   }

   }
                


   
   ?>

