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

class Team {

  protected $name;
  protected $members= [];

  public function __construct($name){
    $this->name=$name;
  }


  public function name() 
  {
    return $this->name;
  }


  public function members() 
  {
    return $this->members; 
  }

  public function add($name) 
  {
    $this->members[]=$name;
  }

  public function cancel() 
  {
    
  }

  public function manager() 
  {
    
  }


}

$makis = new Team ('Makis');
// var_dump($makis->name());
echo $makis->name();


// $makis->add('Diba Alizai');
// var_dump($makis->members());





?>








</body>
</html>