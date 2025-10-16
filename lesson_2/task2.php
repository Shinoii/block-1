<?php
declare(strict_types=1);

//Задание 2: Работа с bool

//Задача:
// Создать функцию isAdult(), которая принимает возраст (int) и возвращает true, если возраст 18 и больше, иначе false.

function isAdult(int $age): bool
{
    if($age >= 18){
        return true;
    }

    return false;
}

//Проверка:
//echo isAdult(20);  // ✅ true
//echo isAdult(17);  // ✅ false
//echo isAdult('20'); // ❌ Должна быть ошибка TypeError