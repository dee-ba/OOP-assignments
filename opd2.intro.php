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

// Solution 2

class Intro {
  public $name;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$user = new Intro("Scott");
echo "Hello All, I am" . $user->get_name();

?>
</body>
</html>