<?php
declare(strict_types=1);

//Задание 2: Именованные аргументы
//Задача:
// Создать функцию calculateDiscount(), которая принимает цену ($price) и скидку ($discount, по умолчанию 10%).
// Функция должна использовать именованные аргументы.

function calculateDiscount(int $price, int $discount = 10): float{
    $discount /= 100;
    return $price - $price * $discount;
}

//Проверка:
echo calculateDiscount(price: 1000);        // ✅ Ожидаемый результат: 900
//echo calculateDiscount(price: 2000, discount: 20); // ✅ Ожидаемый результат: 1600