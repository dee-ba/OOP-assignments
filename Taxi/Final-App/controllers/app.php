<?php
    // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.
  
         //startpunt van je app.
    $company = new Company();
    
         //instantieer auto's met hun benodigde data.
    $audi = new Car($jan, 1000, "Audi");
    $bmw = new Car($jan, 2000, "BMW");
    $volvo = new Car($tomi, 3000, "Volvo");
      
         //voeg auto's toe aan company
    $company->addCar($audi);
    $company->addCar($bmw);
    $company->addCar($volvo);
      
         //returns the most expensive car.
    $mostExpensiveCar = company->getMostExpensiveCar();
    
         //echo what we want to know.
    echo "The most expensive car is: " . $mostExpensiveCar->brand . 'and is owned by ' . $mostExpensiveCar->owner->name; //volvo
  
    $mostExpensiveCar = getMostExpensiveCar($carObjects);
    








  ?>

