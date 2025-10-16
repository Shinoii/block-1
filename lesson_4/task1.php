<?php
declare(strict_types=1);

//Задание 1: Проверка числа (if-else)

//Задача:
// Создать функцию checkNumber(), которая принимает число и возвращает строку:
//"Положительное" – если число больше 0.
//"Отрицательное" – если число меньше 0.
//"Ноль" – если число равно 0.

function checkNumber(int $number): string
{
    if($number > 0){
        return 'Положительное';
    } elseif($number < 0){
        return 'Отрицательное';
    } else{
        return 'Ноль';
    }
}

//Проверка:
//echo checkNumber(10);   // ✅ "Положительное"
//echo checkNumber(-5);   // ✅ "Отрицательное"
//echo checkNumber(0);    // ✅ "Ноль"