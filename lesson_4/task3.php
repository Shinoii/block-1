<?php
declare(strict_types=1);

//Задание 3: Вывод чисел (цикл for)

// Задача:
// Создать функцию printNumbers(), которая принимает число n и выводит все числа от 1 до n включительно с новой строки.

function printNumbers(int $number): void
{
    for($i = 1; $i <= $number; $i++) {
        echo $i . PHP_EOL;
    }
}

//Проверка:
printNumbers(5);
// ✅ Ожидаемый результат:
// 1
// 2
// 3
// 4
// 5