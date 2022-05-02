<?php

$datenow = getdate();
echo "Todays Date: <br>";
echo $datenow['mday'];
echo time();
print date("d H:i" , time());