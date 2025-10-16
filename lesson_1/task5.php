<?php
// Задание 5: null-safe оператор (PHP 8.0)

// Задача:
// Написать функцию getUserEmail(), которая безопасно получает email пользователя из вложенных объектов.

// Условия:
// Пользователь — это объект с вложенным объектом profile, у которого может быть свойство email.

// Если email существует, функция возвращает его.
// Если profile или email отсутствует, вернуть строку "Email не найден".

function getUserEmail($user): string
{
    $email = $user?->profile?->email;
    if(!$email){
        return 'Email не найден';
    }
    return $email;
}

// Пример проверки:
//$user = (object)[
//    'profile' => (object)[
//        'email' => 'test@example.com'
//    ]
//];
//echo getUserEmail($user); // ✅ "test@example.com"
////
//$user = (object)[
//    'profile' => null
//];
//echo getUserEmail($user); // ✅ "Email не найден"
