<?php
// Задание 1: Определение четности чисел
// Инструкция:
// Создайте массив из 5 чисел. Используя цикл  foreach  и условные операторы ( if-else ),
// проверьте, является ли каждое число четным или нечетным, и выведите соответствующее
// сообщение.
$arr = [1,2,3,4,5];
foreach($arr as $i) {
    if($i % 2 == 0){
        echo $i . " четное \n";
    }else{
        echo $i . " нечетное \n"; 
    }
}
echo "\n";

// Задание 2: Подсчет положительных и отрицательных чисел
// Инструкция:
// Создайте массив из 7 чисел, содержащий как положительные, так и отрицательные
// значения. С помощью цикла  foreach  и ветвления ( if-else ) подсчитайте, сколько в
// массиве положительных и отрицательных чисел.
$_arr = [1,-9,-3,0,5,11,-7];
$positiveSumm = 0;
$negativeSumm = 0;
foreach($_arr as $i) {
    if($i >= 0){
        $positiveSumm++;
    }else{
        $negativeSumm++; 
    }
}
echo "Положительных чисел: $positiveSumm \n";
echo "Отрицательных чисел: $negativeSumm \n";
echo "\n";
// Задание 3: Таблица умножения
// Инструкция:
// Используя цикл  for , выведите таблицу умножения для числа 5 от 1 до 10. Каждый
// результат должен выводиться на новой строке в формате:  "5 * 1 = 5" .
for ($i = 1; $i <= 10; $i++) { 
    echo "5 * $i = " . (5 * $i) . "\n"; 
}
echo "\n";

// Задание 4: Условное отображение оценок студентов
// Инструкция:
// Создайте массив с именами 3 студентов и их оценками за экзамен (например:  ["Иван" =>
// 85, "Мария" => 74, "Алексей" => 90] ). Используя цикл  foreach  и ветвления ( if-else ),
// напишите логику, которая определяет, сдал ли каждый студент экзамен:
// Если оценка 50 и выше — вывести:  "<Имя студента> сдал экзамен!" .
// Если оценка ниже 50 — вывести:  "<Имя студента> не сдал экзамен!" .
$students = ["Иван" => 85, "Мария" => 74, "Алексей" => 90, "Алина" => 49.9];
foreach ($students as $name =>$score) {
    if ($score > 50) {
       echo "$name сдал экзамен! \n"; 
    }else{
        echo "$name не сдал экзамен! \n";
    }
}
echo "\n";

// Задание 5: Поиск минимального и максимального значений
// Инструкция:
// Создайте массив из 8 случайных чисел. Используя цикл  foreach , найдите и выведите
// минимальное и максимальное значения в массиве.
$_arr[] = 12;
$min = $_arr[0];
$max = $_arr[0];
foreach($_arr as $i) {
    if($min > $i){
        $min = $i;
    }
    if($max < $i){
        $max = $i;
    }
}
echo "Минимальное число: $min \n";
echo "Максимальное число: $max \n";