<?php
declare(strict_types=1);

//Задание 2: Классификация по возрасту (match)

// Задача:
// Создать функцию getAgeCategory(), которая принимает возраст (int) и использует match для определения категории:
//"Ребенок" (0-12 лет)
//"Подросток" (13-17 лет)
//"Взрослый" (18-64 лет)
//"Пожилой" (65+)

function getAgeCategory(int $age): string
{
    return match(true) {
        $age < 13 => 'Ребенок',
        $age < 18 => 'Подросток',
        $age < 65 => 'Взрослый',
        default => 'Пожилой'
    };
}

//Проверка:
//echo getAgeCategory(8);   // ✅ "Ребенок"
//echo getAgeCategory(15);  // ✅ "Подросток"
//echo getAgeCategory(30);  // ✅ "Взрослый"
//echo getAgeCategory(70);  // ✅ "Пожилой"