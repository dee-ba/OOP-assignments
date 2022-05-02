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

class Intro {
    public $name;
    public function message() {
        $greeting = "Hello All, I am ";
        return $greeting;
    }
    public function set_name ($name){
        $this->name=$name;
    }
    public function get_name (){
        return $this->name;
    }
}

$user = new Intro ();
$user->set_name ("Scott");
echo $user ->message() . $user->get_name();





?>
</body>
</html>