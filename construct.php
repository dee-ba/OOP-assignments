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
public function __construct($name) {
$this->name = $name;
}
}

$person1 = new Person ("Diba");
echo $person1->name; 


?>
</body>
</html>