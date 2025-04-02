<?php
    $array = [10,20,40,50];

    $search = 30;

    $index = array_search($search, $array);


    if ($index !== false) {
        print "Элемент $search найден на индексе $index.";
    } else {
        print "Элемент $search не найден в массиве";
    }

    ?>