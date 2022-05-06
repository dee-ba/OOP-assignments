<?php
    // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.
    
    echo "Trip 1 : ";
    $trip1 = new Trip(30,5);
    echo $trip1->cost(); // trip 1
    echo "<br>";
    echo "Trip 2 : ";
    
    $trip2 = new Trip(40,6);
    echo $trip2->cost(); // trip 2
    echo "<br>";
    echo "Trip 3 : ";
    $trip3 = new Trip(10,4);
    echo $trip3->cost(); // trip 3
    echo "<br>";

    echo "Total Trips : "; 
    $TotalCost = 0;
    $TotalCost += $trip1->cost(); // total of all 3 trips
    $TotalCost += $trip2->cost(); // total of all 3 trips
    $TotalCost += $trip3->cost(); // total of all 3 trips
    
    echo "$ " . $TotalCost; 
    echo "<br>";
    echo "<br>";
    $volvo = new Taxi("Volvo");

    echo $volvo->name . " total costs is: ". "$ " . $TotalCost;  
    
    // volvo totalcosts of 3 trips :
    
    $trip1 = new Trip(40, 10);
    $trip2 = new Trip(50, 100);
    $trip3 = new Trip(60, 150);
    echo "<br>Revenue of two rides is: " . $trip1->cost() + $trip2->cost();

    $taxi = new Taxi("Tomi");
    $taxi2 = new Taxi("Diba");

    $taxi->addTrip($trip1);
    $taxi2->addTrip($trip2);
    $taxi2->addTrip($trip3);
    
    $company = new Company();
    $company->addTax($taxi);
    $company->revenue();
    echo "<br>";
    echo $taxi->name . " taxi has made a total revenue of: " . $taxi->revenue();
    echo "<br>";
    echo $taxi2->name . " taxi has made a total revenue of: " . $taxi2->revenue();

    echo "<br>";
    $




?>
