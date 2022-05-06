<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// write a class that compares the price of 2 cars and shows the most expensive car
​
//DEFINE A BUNCH OF CLASSES NEED FOR YOUR APPLICAITON.
​
// COMPANY CLASS
class Company {
​
    //cars property that will hold all the car objects.
    public $cars;
​
    //constructor initializes a empty array
    function __construct(){
        $this->cars = [];
    }
​
    //add cars to objects.
    public function addCar($car){
        array_push($this->cars, $car);
    }
​
    //calculates the most expensive car
    public function calculateMostExpensiveCar(){
        $mostExpensiveCar = $this->cars[0];
        for($this->cars as $car){
            if($car->price > $mostExpensiveCar->price){
                $mostExpensiveCar = $car;
            }
        }
        return $mostExpensiveCar;
    }
​
}
​
// CAR CLASS
class Car {
​
    public $owner;
    public $price;
    public $brand;
​
    function __construct($owner, $price, $brand){
        $this->owner = $owner;
        $this->price = $price;
        $this->brand = $brand;
    }
​
}
​
// OWNER CLASS
class Owner {
​
    public $name;
​
    function __construct($name){
        $this->name = $name;
    }
}
​
//startpunt van je app.
$company = new Company();
​
//instantieer owner objecten met hun benodigde data
$jan = new Owner("Jan");
$tomi = new Owner("Tomi");
​
//instantieer auto's met hun benodigde data.
$audi = new Car($jan, 1000, "Audi");
$bmw = new Car($jan, 2000, "BMW");
$volvo = new Car($tomi, 3000, "Volvo");
​
//voeg auto's toe aan company
$company->addCar($audi);
$company->addCar($bmw);
$company->addCar($volvo);
​
//returns the most expensive car.
$mostExpensiveCar = company->getMostExpensiveCar();
​
//echo what we want to know.
echo "The most expensive car is: " . $mostExpensiveCar->brand . 'and is owned by ' . $mostExpensiveCar->owner->name; //volvo
​
$mostExpensiveCar = getMostExpensiveCar($carObjects);
​
?>
</body>
</html>