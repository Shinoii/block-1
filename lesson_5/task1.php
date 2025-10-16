<?php
declare(strict_types=1);

//Задание 1: Аргументы по умолчанию

//Задача:
// Создать функцию greetUser(), которая принимает имя ($name) и язык ($lang, по умолчанию "ru").
// Функция должна возвращать приветствие:
//"Привет, Иван!", если язык "ru".
//"Hello, John!", если язык "en".

function greetUser(string $name, string $lang = 'ru'): string{
    return $lang == 'ru' ? 'Привет, ' . $name . '!' : 'Hello, ' . $name . '!' ;
}

//Проверка:
echo greetUser("Иван");      // ✅ "Привет, Иван!"
echo greetUser("John", "en"); // ✅ "Hello, John!"