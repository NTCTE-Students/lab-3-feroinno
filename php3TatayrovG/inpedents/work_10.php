<?php

    $array = [
        ["Имя", "Возраст", "Город"],
        ["Алексей", 25, "Москва"],
        ["Мария", 30, "Санкт-Петербург"],
        ["Иван", 22, "Новосибирск"]
    ];

    print "<table border = '1'>";

    foreach ($array as $row) {
        print "<tr>";
        foreach ($row as $cell) {
            print "<td>$cell</td>";
        }
        print "</tr>";
    }

    print "</table>";

    ?>