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

class Taxi{
 public $time;
 public $distance;

 public function __construct($time,$distance){
     $this->time=$time;
     $this->distance=$distance;
 }

 public function total(){
     $this->total = $this->time*$0.17 + $this->distance*$0.50;
 }




?>
 






 </body>
</html>