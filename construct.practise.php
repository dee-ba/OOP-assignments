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
public function __construct($name) {     //public function setName($name) {
    $this->name = $name;}}               // $this->name = $name; }}

                                    // if we were using setName() the object would be set as follows:


$person1 = new Person ("Diba");         // $person1 = new Person ();
echo $person1->name;                    // $person1->setName("Diba");
                                        // echo $person1->$name;



?>



</body>
</html>