<?php
declare(strict_types=1);

//Задание 2: Преобразование массива (array_map)

//Задача:
// Создать функцию squareNumbers(),
// которая принимает массив чисел и возвращает массив, где каждое число возведено в квадрат.

function squareNumbers(array $numbers): array
{
    return array_map(function($number){
        return $number ** 2;
    }, $numbers);
}

//Проверка:
//print_r(squareNumbers([1, 2, 3, 4]));
//// ✅ Ожидаемый результат: [1, 4, 9, 16]
//
//print_r(squareNumbers([-2, 5, 10]));
//// ✅ Ожидаемый результат: [4, 25, 100]
