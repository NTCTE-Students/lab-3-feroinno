<?php 
    $Array = ["H","e","l","l","o", "W ", "o", "r", "l", "d"];
    
    $revArray = array_reverse($Array);

    print "Его перевернуло: <br> \n" ;

    foreach ($revArray as $key => $value) {
        print $value;
    }

    ?>