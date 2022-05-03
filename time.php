<?php


class Ride {


    // properties 
    $DateTime1 = '02-05-2022 07:00'; //monday
    $DateTime2 = '07-05-2022 22:00'; //friday
    function dateTimDiff($DateTime1,$DateTime1){
        
    $first = strtotime($date1);
    $second = strtotime($date2);
    $datediff = abs($first - $second); //mon-fri
    $dif['m'] = floor($datediff/(60)); //minute
    $dif['h'] = floor($datediff/(60*60)); //hour
    $dif['d'] = floor($datediff/(60*60*24));//day 

    //method

    function __construct ($second,$first) {


    }

function datediff() {
    $datediff = abs($first - $second); //mon-fri
}

}
   

         ///////////////////////////////////////////
        function dateTimDiff($date1,$date2){
          $dif=array();
                $first = strtotime($date1);
                $second = strtotime($date2);
                $datediff = abs($first - $second); //mon-fri
                $dif['m'] = floor($datediff/(60)); //minute
                $dif['h'] = floor($datediff/(60*60)); //hour
                $dif['d'] = floor($datediff/(60*60*24));//day 
                      

           return $dif;     

        }/////////////////////////////////////////dateDiff($old,$new)   
   
   ?>