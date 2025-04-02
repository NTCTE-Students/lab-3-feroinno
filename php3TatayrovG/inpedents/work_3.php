<?php
$gogs = array("gogogogo","ogogoggg","gooooooooo");

$totalCharacters = 0;

foreach ($gogs as $gog) {
    $totalCharacters += strlen($gog);
}

print "Общее количество символов в массиве: " . $totalCharacters . "\n";
?>