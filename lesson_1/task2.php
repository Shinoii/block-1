<?php
// Задание 2: Использование named arguments (PHP 8.0)

// Задача:
// Создать функцию calculatePrice(),
// которая принимает параметры basePrice, discount и tax и использует именованные аргументы.

function calculatePrice(int $basePrice, int $discount, int $tax): int|float
{
    $tax = $tax/100 + 1;
    $discount /= 100;
    $price = $basePrice * $tax;
    return $price - $price * $discount;
}

// Формат проверки:
// echo calculatePrice(basePrice: 1000, discount: 10, tax: 5); // ✅ 945
// echo calculatePrice(tax: 5, discount: 10, basePrice: 2000); // ✅ 1890