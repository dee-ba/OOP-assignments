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

public function setName($name){
    $this->name = $name;

}

public function getName(){
    return $this->name;

}
}


$person1 = new Person();
$person1->setName("Diba");
echo $person1->getName();


?>



</body>
</html>