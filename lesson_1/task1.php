<?php
// Задание 1: Использование match (PHP 8.0)

//Задача:
//Написать функцию getStatusMessage(),
//которая принимает строку (success, error, pending) и возвращает соответствующее сообщение с использованием match.

function getStatusMessage(string $message): string
{
    return match ($message) {
        'success' => 'Операция выполнена успешно',
        'error' => 'Произошла ошибка',
        'pending' => 'Операция в ожидании',
        default => 'Неизвестный статус'
    };
}

//Формат проверки:
//echo getStatusMessage('success'); // ✅ "Операция выполнена успешно"
//echo getStatusMessage('error');   // ✅ "Произошла ошибка"
//echo getStatusMessage('pending'); // ✅ "Операция в ожидании"
//echo getStatusMessage('unknown'); // ❌ "Неизвестный статус"