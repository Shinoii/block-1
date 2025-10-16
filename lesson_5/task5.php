<?php
declare(strict_types=1);

//Задание 5: Именованные аргументы с разным порядком
//Задача:
// Создать функцию generatePassword(), которая принимает:
//length (по умолчанию 8)
//includeNumbers (по умолчанию true)
//includeSpecialChars (по умолчанию false)
//Функция должна генерировать случайный пароль с указанными параметрами.

function generatePassword(int $length = 8, bool $includeNumbers = true, bool $includeSpecialChars = false): string{
    $defaultChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digitChars = '0123456789';
    $specialChars = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    $passwordChars = $defaultChars;
    $password = '';

    if ($includeSpecialChars) {
        $passwordChars .= $specialChars;
    }
    if ($includeNumbers) {
        $passwordChars .= $digitChars;
    }

    $passwordCharsLength = strlen($passwordChars);
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $passwordCharsLength - 1);
        $password .= $passwordChars[$randomIndex];
    }

    return $password;
}

//Проверка:
echo generatePassword();
// ✅ Должен быть 8-значный пароль с цифрами.

echo generatePassword(length: 12, includeSpecialChars: true);
// ✅ Должен быть 12-значный пароль с цифрами и спецсимволами.