<?php
// создаем массив
$categories = [
  "Зелень",
  "Помидоры",
  "Огурцы",
];

// создание пустого массива
$myFriends = [];

echo '<pre>';
  print_r($myFriends);
echo '</pre>';
// добавление элементов в массив
$myFriends[] = 'Gary Guddini';

echo '<pre>';
print_r($myFriends);
echo '</pre>';

// добавление элементов в массив в конец
array_push($myFriends, 'Tom Ford');


echo '<pre>';
print_r($myFriends);
echo '</pre>';

// заменить или добавить элемент массива
$myFriends[8] = "Bob Donaly";

echo '<pre>';
print_r($myFriends);
echo '</pre>';

// получить первый элемент массива
echo $myFriends[0];

echo '<br>';
// получить 1 элемент массива
echo array_shift($myFriends);

echo '<br>';
// получить последний элемент массива
echo $myFriends[count($myFriends) - 1] . '<br>';
echo array_pop($myFriends);

$salad = ["Зелень","Помидоры","Огурцы"];

echo '<pre>';
print_r($salad);
echo '</pre>';

$secret_part = "Оливковое масло";

// функция для вставки и удаления элементов массива вставка в середину массива
// 3 параметром, колько элементов ударить
// 4 параметром можно вставить массив
array_splice($salad, 2, 0, $secret_part);


echo '<pre>';
print_r($salad);
echo '</pre>';

// представление gif, как массива, ассоциативный массив
$gif = [
  'gif' => '/img/cat.gif',
  'title' => 'Типичный юзер',
  'author' => 'frexin',
  'likes_count' => 1
];

echo '<pre>';
print_r($gif);
echo '</pre>';

$cat = [
  'gender' => 'male',
  'name' => 'keks',
  'color' => 'yellow',
  'age' => 1.5,
];

// можно добавлять новое значение после создания
$cat['weight'] = 2;


echo '<pre>';
print_r($cat);
echo '</pre>';

// удаление элемента по ключу
unset($cat['name']);

// чтение элемента по ключу
print($cat['name']);

// функции для работы с массивами
$movies = ["skyfall", "spectre", "golden eye", "goldfinger"];

// считает кол-во элементов в массиве
echo 'Длинна массива ' . count($movies) .'<br>';

// проверяет существование в массиве элемента по его ключу(индексу)
if (isset($movies[3])) {
  echo 'true' .'<br>';;
} else {
  echo 'false' .'<br>';;
}

// проверяет существование в массиве элемента по его значению
if (in_array('skyfall', $movies)) {
  echo 'true' .'<br>';;
} else {
  echo 'false' .'<br>';;
}

// удаление элемента по ключу(индексу)
unset($movies[1]);

// сортировка массива по возрастанию
sort($movies);

echo '<pre>';
print_r($movies);
echo '</pre>';




