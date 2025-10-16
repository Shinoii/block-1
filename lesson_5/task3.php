<?php
declare(strict_types=1);

//Задание 3: Несколько аргументов по умолчанию
//Задача:
// Создать функцию orderPizza(), которая принимает три аргумента:
//size (по умолчанию "medium")
//crust (по умолчанию "thin")
//toppings (массив, по умолчанию ["cheese"])
//Функция должна возвращать строку с описанием заказа.

function orderPizza(string $size = 'medium', string $crust = 'thin', array $toppings = ['cheese']): string{
    $separatedToppings = implode(', ', $toppings);
    return "Заказ: $size пицца на тонком тесте с $separatedToppings";
}

//Проверка:
echo orderPizza();
// ✅ "Заказ: medium пицца на тонком тесте с cheese"

echo orderPizza(size: "large", toppings: ["cheese", "pepperoni"]);
// ✅ "Заказ: large пицца на тонком тесте с cheese, pepperoni"