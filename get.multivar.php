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
class Person {
public $name;
public $color;

public function setName($name,$color){
    $this->name = $name;
    $this->color = $color;

}

public function getName(){
    return $this->name;
    return $this->color;
}
public function getColor(){
    return $this->color;
}

}


$person1 = new Person();
$person1->setName("Diba","Brown");
echo $person1->getName();
echo $person1->getColor();

?>



</body>
</html>