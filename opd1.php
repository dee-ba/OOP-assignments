<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Opdracht 1 
Write a simple PHP class which displays the following string.
'MyClass class has been initialized!' -->

<?php

class Message {
    // Properties
    public $text;
  
  
    // Methods
    function set_text($text) {
      $this->text = $text;
    }
    function get_text() {
      return $this->text;
    }
  }
  
  $user = new Message();
  
  $user->set_text('MyClass class has been initialized!');
  
  
  echo $user->get_text();
  
  ?>

</body>
</html>