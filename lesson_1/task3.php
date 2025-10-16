<?php
//Задание 2: Использование named arguments (PHP 8.0)

//Задача:
//Создать класс User, у которого свойства id, name, email являются readonly.

class User
{
    public readonly int $id;
    public readonly string $name;
    public readonly string $email;
    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

//Формат проверки:
//$user = new User(1, 'Иван', 'ivan@example.com');
//echo $user->name; // ✅ "Иван"
//$user->name = 'Петр'; // ❌ Ошибка! Свойство `readonly`