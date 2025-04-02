<?php

$person = [
    'name' => 'Иван',
    'age' => 25,
    'city' => 'москва'
];


$translate = [
    'name'=>'Имя',
    'age'=>'Возраст',
    'city'=>'Москва',
];

foreach($person as $key => $value) {
    print("{$translate[$key]}: {$value}<br>");
}