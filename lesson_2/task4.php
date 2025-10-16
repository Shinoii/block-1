<?php
declare(strict_types=1);

//Задача:
//Создать функцию getNamesLength(), которая принимает массив строк и возвращает массив с длинами этих строк.

function getNamesLength(array $names): array
{
    $lengthNames = [];
    foreach($names as $name) {
        $lengthNames[] = strlen($name);
    }

    return $lengthNames;
}

//Проверка:
//print_r(getNamesLength(["Alice", "Bob", "Charlie"]));
// ✅ Ожидаемый результат: [5, 3, 7]
//
//print_r(getNamesLength([123, "Bob", "Charlie"]));
//// ❌ Должна быть ошибка TypeError (только строки разрешены)