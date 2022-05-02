<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- echo Opdracht 3 
Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72 -->

<?php
   class Calculator {
    public $num1;
    public $num2;
    

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add(){
        return $this->num1 + $this->num2;
    }

    public function subtract(){
        return $this->num1 - $this->num2;
    }

    public function multiply (){
        return $this->num1 * $this->num2;
    }

    public function divide () {
        return $this->num1 / $this->num2;
    }
}

$mycalc = new Calculator(12,6);
echo "<p> 12 + 6 = ". $mycalc->add(). "</p>"; 

$mycalc = new Calculator (15,12);
echo "<p> 15 - 12 = ".$mycalc->subtract(). "</p>";

$mycalc = new Calculator (20,2);
echo "<p> 20 * 2 = ".$mycalc->multiply(). "</p>";

$mycalc = new Calculator (20,2);
echo "<p> 20 / 2 = ".$mycalc ->divide(). "</p>";


?>
</body>
</html>