<?php // записываем куку
$name = "visitcount"; // уникальное имя куки
$visitCount = 1; // значение куки
$expire = strtotime('+30 days');  // дата истечения куки
$path = '/'; // устанавливаем на весь сайт



// читаем куку
if (isset($_COOKIE['visitcount'])) {
  $visitCount = $_COOKIE['visitcount'] + 1;
}

setcookie($name, $visitCount, $expire, $path);

echo "Количество посещении: {$visitCount}";


// удаляем куку

if (isset($_COOKIE['visitcount'])) {
  unset($_COOKIE['visitcount']);
  //unset($_COOKIE[[]]);// удаления всех кук

  // еще способ удаления устанавливаем дату из прошлого
  //setcookie('visitcount', '', time() - 3600, '/');
}