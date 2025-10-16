<?php
declare(strict_types=1);

//Задание 4: Факториал числа (цикл while)

//Задача:
//Создать функцию factorial(), которая принимает n и возвращает факториал числа (n!).
//Формула:
//n! = 1 × 2 × ... × n

function factorial(int $n): int {
    if($n === 0 || $n === 1) {
        return 1;
    }

    $result = 1;
    while($n != 0){
        $result *= $n;
        $n--;
    }

    return $result;
}

//Проверка:
echo factorial(5);  // ✅ 120
echo factorial(3);  // ✅ 6
echo factorial(1);  // ✅ 1
echo factorial(0);  // ✅ 1