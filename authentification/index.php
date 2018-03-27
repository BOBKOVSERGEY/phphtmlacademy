<?php

$pass = '19871954';
$passHash = md5($pass);

echo $passHash;

echo '<br>--------------<br>';
$passNext = '19871954';
$passNextHash = md5($passNext);

echo $passNextHash;
echo '<br>--------------<br>';
// работа с паролями в php

$passwordHash = password_hash('19871954', PASSWORD_DEFAULT);

// сравнивает введенный пароль с хэшом
if (password_verify('19871954', $passwordHash)) {
  echo 'Корректный пароль';
} else {
  print 'Данные не верны';
}