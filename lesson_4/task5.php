<?php
declare(strict_types=1);

//Задание 5: Обход массива (foreach)
// Задача:
// Создать функцию printArrayItems(), которая принимает массив и выводит каждый элемент с новой строки.

function printArrayItems(array $array): void
{
    foreach ($array as $item) {
        echo $item . PHP_EOL;
    }
}

//Проверка:
printArrayItems(["apple", "banana", "cherry"]);
// ✅ Ожидаемый результат:
// apple
// banana
// cherry