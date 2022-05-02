<?php

class Taxi {
    public $hour;
    public $minute;

    public function __construct($hour,$minute) {
            $this->hour = $hour;
            $this->minute= $minute;
    }

    public function mktime() {
        return date("H:i");
        

}



}


$time = new Taxi();
$time = mktime(10,05);


?>


			
			