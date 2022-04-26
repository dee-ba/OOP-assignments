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










//write a program that shows a audi (1000) and bmw (2000)
// that shows the cheaper car and its brand name.

class Car {

    // properties
    public $price;
    protected $brand;

    function __construct($price, $brand){
        $this->price = $price;
        $this->brand = $brand;
    }
    //methods
    function setBrand($brand){
        $this->brand = $brand;
    }

    function getBrand(){
        return $this->brand;
    }
}

// we have 2 objects of the Car Class instantiated.
$audi = new Car(1000, "Audi");
$bmw = new Car(2000, "BMW");

// $audiPrice = 1000;
// $bmwPrice = 2000;

//we need to compare the price of car 1 to car 2
 if($audi->price <  $bmw->price) {
    echo $audi->getBrand() . " is the cheapest"; 
 }
 else {
    echo "BMW is cheaper"; 
 }

// $boatService->showBestPerformingBoat();
//loops all the internal booats
//compares all their profits
//returns the boat that provided the most money



// foreach ($cars as $car) {
//     if($car->price > 1000){
//         echo "this is a high price";
//     }
//   }



// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $val) {
//   echo "$x = $val<br>";
// }

 ?>
</body>
</html>