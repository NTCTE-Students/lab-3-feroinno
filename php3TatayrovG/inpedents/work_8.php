<?php 

    $array = [10,5,3,4,22,1];

    sort($array);

    print "Массив после сортировки по возрастанию: <br> \n";

    foreach ($array as $arra){
        print $arra. "<br>";
    }

    rsort($array);

    print "Массив после сортировки по убыванию: <br> \n";

    foreach ($array as $arr){
        print $arr. "<br>";
    }
    ?>
