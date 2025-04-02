<?php

    $string = "Давай ломай меня полностью на части <br> ";

    $array = explode (" ", $string);

    foreach ($array as $value) {
        print $value. "<br>" ;
    }