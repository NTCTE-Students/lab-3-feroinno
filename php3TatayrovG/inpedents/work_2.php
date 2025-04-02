<?php
$numbers = [12,5,4,35,656,43,6,21,5,-1,-10,66.-185] ;

$maxValue =$numbers[0];
$minValue =$numbers[0];

foreach($numbers as $number) {

    if ($number > $maxValue) {
        $maxValue =$number;
    }




    if ($number < $minValue) {
        $minValue =$number;
    }
}

print "Максимальное значение: " . $maxValue . "<br>" ;
print "Минимальное значение: " . $minValue . "\n";
?>