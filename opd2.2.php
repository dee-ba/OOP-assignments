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

// "Opdracht 2
// Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class." 

//solution 1

class Message {
  // Properties
  public $name;
  public $text =  "Hello All, I am ; 


  // Methods
  function __construct ($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$message = new Message('Scott');



echo $message->get_name();



?>
</body>
</html>