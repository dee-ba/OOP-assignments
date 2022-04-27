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
    }
    
    
    $mycalc = new Calculator(1,1);
    echo  $mycalc-> add();
    






?>
</body>
</html>