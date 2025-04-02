<?php

    $array = [4,7,2,3,4,7,1,2,3,4,5,6,7,22];

    $arrayWithout = array_unique($array );

    print "Массив после удаления дубликатов: <br> \n " ;
    
    foreach ($arrayWithout as $key => $value) {
        print $value. "<br>"  ;
    }
    
    ?>