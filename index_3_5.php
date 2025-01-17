<?php
// Задача 1: Создание простого массива
// Создайте массив с именами нескольких ваших друзей и выведите его на экран.
// Задача:
// 1. Создайте массив с как минимум 4 именами.
// 2. Выведите каждое имя на новой строке.

$friends = ["Sasha", "Masha", "Vova", "Lera"];
foreach ($friends as $friend)
    echo $friend . "\n";

// Задача 2: Индексы массива
// Создайте массив чисел и получите значение элемента по индексу.
// Задача:
// 1. Создайте массив из 5 произвольных чисел.
// 2. Выведите на экран элемент с индексом 2.

$numbers = [6, 12, 24, 48, 96];
echo $numbers[2] . "\n";

// Задача 3: Ассоциативный массив
// Создайте ассоциативный массив, который будет содержать информацию о вашем друге: имя,
// возраст и город.
// Задача:
// 1. Создайте массив с ключами  name ,  age  и  city .
// 2. Выведите на экран имя и возраст друга.
$friend = ["name"=>"Саша", "age"=>48, "cite"=>"Томск"];
echo "Моего друга зовут " . $friend["name"] . "\n";
echo "Он живет в городе " . $friend["cite"] . "\n";

// Задача 4: Массивы с циклами
// У вас есть массив чисел. Выведите все числа из массива, которые больше 10.
// Задача:
// 1. Создайте массив из как минимум 5 чисел.
// 2. Напишите цикл, который выводит на экран только те числа, которые больше 10.

foreach($numbers as $number)
if ($number > 10) {
    echo $number . "\n";
}

// Задача 5: Работа с массивами функций
// Создайте массив чисел и посчитайте их сумму.
// Задача:
// 1. Создайте массив из 5 чисел.
// 2. Используйте встроенную функцию PHP для нахождения суммы всех чисел.
echo array_sum($numbers) . "\n";

// Задача 6: Учет товаров в магазине
// Вам необходимо создать систему учета товаров в магазине. Каждый товар должен храниться
// в виде ассоциативного массива с ключами:
// name  — название товара
// price  — цена товара
// quantity  — количество на складе
// Задача:
// 1. Создайте массив товаров (как минимум 5 товаров).
$products = [
    ["name"=>"pencil", "price"=>100, "quantity"=>15],
    ["name"=>"pen", "price"=>70, "quantity"=>12],
    ["name"=>"book", "price"=>300, "quantity"=>17],
    ["name"=>"ruler", "price"=>250, "quantity"=>23],
    ["name"=>"notepad", "price"=>180, "quantity"=>28],
];

// 2. Напишите функцию, которая выводит список всех товаров с их названиями и ценами.
function productsList($arrProducts) {
    foreach ($arrProducts as $product) {
        echo "Товар " . $product["name"] . " Цена " . $product["price"] . " Остаток на складе " . $product["quantity"] . "\n";
    }
}

// 3. Напишите функцию, которая добавляет новый товар в массив.
function addProduct(&$arrProducts, string $name, int $price, int $quantity) {
    $product = ["name"=>$name, "price"=>$price, "quantity"=>$quantity];
    $arrProducts[] =  $product;
}

echo "Начальное состояние списка товаров: " . "\n", productsList($products);
addProduct($products, "pencil box", 330, 19);
echo "Измененное состояние списка товаров: " . "\n", productsList($products);

// 4. Напишите функцию, которая обновляет количество товара на складе.
// Не совсем понятно что обновлять, ведь мы нигде количество не изменяли,
// но напишу к примеру подсчет общего количества всех товаров,
// после добавления новой позиции:
$sumQuantity = array_reduce($products, function ($sum, $product) {
    $sum += $product["quantity"];
    return $sum;
}, 0);

echo "Общее количество всех товаров на складе равно : " . $sumQuantity;