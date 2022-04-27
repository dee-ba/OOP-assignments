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
// Opdracht 1 - Write a simple PHP class which automatically displays the following string when initialized.
// Output: 'MyClass class has been initialized!'

class MyClass {
    public $text = "MyClass class has been initialized";
}

$message = new MyClass;
echo $message->text;
?>
<br><br><br><br>

<!-- // "Opdracht 2
// Write a simple PHP class which displays an introductory message like //"Hello All, I am Scott", where "Scott" is an argument value of the method within the class."  -->

<?php
class Intro {
    public $message = 'Hello All, I am ';
    public function introduce($name)
    {
     return $this->message.$name;
    }
    }
   $mymessage = New Intro();
   echo $mymessage->introduce('Scott');
   ?>



<?php




?>




</body>
</html>