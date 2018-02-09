<?php
function totalAmount($cost, $price)
{
  $total = $cost + $price;
  return $total;
}

totalAmount(5,10);

$firstDigit = 2;
$secondDigit = 3;

function calculateAmount($first, $second)
{
  $total = $first * $second;
  echo $total;
}


calculateAmount($firstDigit, $secondDigit);
echo '<br>';
// анонимные функции
$salad = [
  "Огурцы",
  "Помидоры",
  "Лук"
];

// первым аргументом принимает массив, вторым анонимная функция
array_walk($salad, function($value) {
  print $value . ", ";
});