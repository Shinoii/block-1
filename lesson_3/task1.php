<?php
declare(strict_types=1);

//Задание 1: Фильтрация массива (array_filter)

//Задача:
// Создать функцию filterEvenNumbers(), которая принимает массив чисел и возвращает только четные числа.

function filterEvenNumbers(array $numbers): array
{
    return array_filter($numbers, function($number) {
        return $number % 2 === 0;
    });
}

//Проверка:
//print_r(filterEvenNumbers([1, 2, 3, 4, 5, 6, 7]));
//// ✅ Ожидаемый результат: [2, 4, 6]
//
print_r(filterEvenNumbers([11, 15, 21]));
// ✅ Ожидаемый результат: []