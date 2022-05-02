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

class Taxi {

//properties
                public $day;
                public $distance;
                public $duration;
                public $premium;
                public $starttime;
                public $endtime;
                
//Methods

// day 
                function set_day($day)
				{
					$this->day = $day;
				}

                function get_day()
				{
					return $this->day;
				}

// start_time 
                function setTime($startTime, $endTime)
				{

                    $this->startTime = $startTime;
                    $this->endTime = $endTime;
				}

                //example
                $time = new Time("324:00");

                $startTime = new Time("11:00");
                $endTime = new Timt("12:00");

                //error
                $ride->setTime($startTime, $endTime);
                $ride->setTime("267:40", "12:40");

                function get_start_time()
				{
					return $this->start_hour .":".$this->start_minute;
				}

// end_time
                function set_end_time($end_hour,$end_minute)
				{
                    $this->end_hour = $end_hour;
                    $this->end_minute = $end_minute;
				}

                function get_end_time()
				{
					return $this->end_hour .":".$this->end_minute;
                }

//duration
                // function duration()
				// {
                //     return ($this->end_hour .":".$this->end_minute). "-" .($this->start_hour .":".$this->start_minute);
				// }


// distance 
function set_distance_cost($distance)
{
    $this->distance = $distance;
}

function get_distance_cost()
{
    return $this->distance*0.50;
}              

//time without :

                function set_t_time($starttime, $endtime) {
                    $this->endtime = $endtime;
                    $this->starttime = $starttime;
                    
                }
                
                function get_t_time() {
                    return  $this->endtime - $this->starttime;
                }
            }

            $taxiRide1 = new Taxi();	
            $taxiRide1->set_day("Thursday");
            echo "Day Started :" .$taxiRide1->get_day(); 
            echo "<hr>";
            $taxiRide1->set_start_time(10,05); 
            echo "Time Started " .$taxiRide1->get_start_time();
            echo "<hr>";
            $taxiRide1->set_end_time(11,25); 
            echo "Time Ended " .$taxiRide1->get_end_time();
            echo "<hr>";
            $taxiRide1->set_distance_cost(10); 
            echo "Total Distance Costs: " ."€ " .$taxiRide1->get_distance_cost();
            echo "<hr>";
            // echo "Duration: " .$taxiRide1->duration(). "Minutes"; // check function duration: need to be able to count time from 10:15-11:25 
            // echo "<hr>";
            $taxiRide1->set_t_time(1005,1125);
            echo $taxiRide1->get_t_time();
           

          



            

            


?>
</body>
</html>