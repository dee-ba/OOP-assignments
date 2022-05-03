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
   $DateTime1 = '02-05-2022 07:00'; //monday
   $DateTime2 = '07-05-2022 22:00'; //friday

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
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>StartPHP 022: Time and Date Difference Code 1</title>
    </head>
    <body>
        <h1>Time Difference</h1>

        <span style="font-size:1m">First date and time: <?php echo $DateTime1?></span><br/>
        <span style="font-size:1m">Second date and time: <?php echo $DateTime2?></span><br/>
       
         
       Hours: <?php echo  dateTimDiff($DateTime1,$DateTime2)['h']?><br/>
       Minutes: <?php echo  dateTimDiff($DateTime1,$DateTime2)['m']?><br/>
       Days: <?php echo  dateTimDiff($DateTime1,$DateTime2)['d']?><br/>  
          


    </body>
</html>
