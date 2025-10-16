<?php
declare(strict_types=1);

//Задание 6: Вывод четных чисел (цикл while + continue)

//Задача:
// Создать функцию printEvenNumbers(), которая принимает число n и выводит все четные числа от 1 до n включительно.

function printEvenNumbers(int $n): void{
    $number = 1;
    while($number <= $n){
        if($number % 2 !== 0){
            $number++;
            continue;
        }

        echo $number . PHP_EOL;
        $number++;
    }
}

//Проверка:
printEvenNumbers(10);
// ✅ Ожидаемый результат:
// 2
// 4
// 6
// 8
// 10
