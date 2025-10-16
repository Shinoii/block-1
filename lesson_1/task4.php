<?php
//Задание 4: Enums (PHP 8.1)

//Задача:
// Создать enum OrderStatus с тремя значениями: Pending, Shipped, Delivered.
// Написать функцию getDeliveryMessage(), которая принимает OrderStatus и возвращает сообщение.

enum OrderStatus: string{
    case Pending = 'Заказ в ожидании';
    case Shipped = 'Заказ отправлен';
    case Delivered = 'Заказ доставлен';
}

function getDeliveryMessage(OrderStatus $status): string
{
    return $status->value;
}

//Формат проверки:
//echo getDeliveryMessage(OrderStatus::Pending);   // ✅ "Заказ в ожидании"
//echo getDeliveryMessage(OrderStatus::Shipped);   // ✅ "Заказ отправлен"
//echo getDeliveryMessage(OrderStatus::Delivered); // ✅ "Заказ доставлен"