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
class People {
public $name;
public $age;
public $nationality;

public function setName($name, $age, $nationality) {
$this->name = $name;
$this->age = $age;
$this->nationality= $nationality;
}
}

$person1 = new People ();
$person2 = new People ();
$person1 ->setName("Sam","28", "Dutch");
echo $person1->name; 
echo $person1->age; 
echo $person1->nationality; 
$person2 ->setName("Larry","60", "German");
echo $person2->name; 
echo $person2->age; 
echo $person2->nationality; 

?>
</body>
</html>