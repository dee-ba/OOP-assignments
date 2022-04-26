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

echo "Opdracht 2
Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.
"
class Message 
  // Properties
  public $greet;
  // Methods
  function set_name($greet) {
    $this->greet = $greet;
  }
  function get_name() {
    return $this->greet;
  }

}

$scott = new Message();
$scott->set_name('Scott');
echo "Hello All, I am " . $scott->get_name();



?>
</body>
</html>