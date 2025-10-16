<?php
declare(strict_types=1);

//Задание 1: Строгая типизация (strict_types)

//Задача:
// Создать функцию multiply(), которая принимает только два числа (int или float), умножает их и возвращает результат.

function multiply(int|float $a, int|float $b): int|float
{
    return $a * $b;
}

//Проверка:
//echo multiply(3, 2);     // ✅ Ожидаемый результат: 6
//echo multiply(3.5, 2);   // ✅ Ожидаемый результат: 7.0
//echo multiply('3', 2);   // ❌ Должна быть ошибка TypeError