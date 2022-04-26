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
   class MyCalculator{
    public $number1;
    public $number2;
    public $total;

    public function input_two_no($num1,$num2){
        $this->number1=$num1;
        $this->number2=$num2;
    }

    public function the_sum(){
        $this->total = $this->number1+$this->number2;
    }

    public function output_the_sum(){
    echo $this->total;
    }

}

$numbers = new MyCalculator;
$numbers->input_two_no(12,6);

echo $numbers->the_sum();
$numbers->output_the_sum();





?>
</body>
</html>