<?php
declare(strict_types=1);

//Задание 5: union types (PHP 8.0)

//Задача:
// Создать функцию formatValue(),
// которая принимает число (int или float) или строку (string) и возвращает его в формате строки.

function formatValue(int|float|string $number): string
{
    return (string)$number;
}

//Проверка:
//echo formatValue(100);      // ✅ "100"
//echo formatValue(99.99);    // ✅ "99.99"
//echo formatValue("hello");  // ✅ "hello"
//echo formatValue(true);     // ❌ Должна быть ошибка TypeError