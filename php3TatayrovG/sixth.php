<?php

// Создание массива
$fruits = ['Егор', 'Банан', 'Апельсин'];

// Сортировка массива
sort($fruits);

foreach($fruits as $fruit) {
    print("{$fruit}<br>");
}