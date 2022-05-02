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

class MyClass {
    
    public function message() {
    $a="MyClass class has been initialized!";
    return $a;
    }

}



$start_message = new MyClass ();
echo $start_message->message();


?>
</body>
</html>