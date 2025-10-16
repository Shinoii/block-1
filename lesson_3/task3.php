<?php
declare(strict_types=1);

//Задание 3: Ассоциативные массивы

//Задача:
// Создать функцию getUserEmails(),
// которая принимает массив пользователей (id, name, email) и возвращает массив только с email-адресами.

function getUserEmails(array $users): array
{
    return array_map(function ($user){
        return $user['email'];
    }, $users);
}

//Проверка:
//$users = [
//    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
//    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
//];
//
//print_r(getUserEmails($users));
//// ✅ Ожидаемый результат: ["alice@example.com", "bob@example.com"]