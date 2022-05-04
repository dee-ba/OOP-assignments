<?php
    // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.
    echo "Trip 1 : ";
    $trip = new Cost(30,5,"Tuesday");
    echo $trip->calculateCosts(); // trip 1
    echo "<br>";
    echo "Trip 2 : ";
    $trip2 = new Cost(40,6,"Wednesday");
    echo $trip2->calculateCosts(); // trip 2
    echo "<br>";
    echo "Trip 3 : ";
    $trip3 = new Cost(10,4,"Friday");
    echo $trip3->calculateCosts(); // trip 3
    echo "<br>";

    echo "Total Trips : "; 
    $TotalCost= 0;
    $TotalCost+= $trip->calculateCosts(); // total of all 3 trips
    $TotalCost+= $trip2->calculateCosts(); // total of all 3 trips
    $TotalCost+= $trip3->calculateCosts(); // total of all 3 trips
    echo "$ " . $TotalCost; 
    echo "<br>";
    echo "<br>";
    $volvo = new Taxi("Volvo");
    echo $volvo->add() . " total costs is: ". "$ " . $TotalCost;  
    
    // volvo totalcosts of 3 trips :
    
    


?>
