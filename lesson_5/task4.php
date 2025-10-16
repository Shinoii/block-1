<?php
declare(strict_types=1);

//Задание 4: Обязательные и необязательные аргументы
//Задача:
// Создать функцию formatText(), которая принимает обязательный параметр text и необязательный параметр uppercase (по умолчанию false).
// Функция должна возвращать текст в верхнем регистре, если uppercase === true.

function formatText(string $text, bool $uppercase = false): string{
    return $uppercase ? $text = strtoupper($text) : $text;
}

//Проверка:
echo formatText("hello");       // ✅ "hello"
echo formatText("hello", true); // ✅ "HELLO"