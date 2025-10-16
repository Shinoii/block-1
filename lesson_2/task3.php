<?php
declare(strict_types=1);

//Задание 3: float и округление

//Задача:
// Создать функцию calculateTax(),
// которая принимает цену (float) и налог (float),
// вычисляет итоговую сумму с налогом и округляет её до 2 знаков после запятой.

function calculateTax(float $price, float $tax): float
{
    return round($price + ($price * $tax), 2);
}

//Проверка:
//echo calculateTax(100, 0.2);  // ✅ Ожидаемый результат: 120.00
//echo calculateTax(50, 0.15);  // ✅ Ожидаемый результат: 57.50
//echo calculateTax(99.99, 0.05); // ✅ Ожидаемый результат: 104.99