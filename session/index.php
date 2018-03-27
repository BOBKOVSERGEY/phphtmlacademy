<?php
// обязательно при использовании сессий? стартуем сессию
session_start();
if (isset($_SESSION['username'])) {
  // чтение значения из сессии
  print $_SESSION['username'];
}
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
// запись значения в сессию
$_SESSION['username'] = 'Вася';

// очищаем сессию
//$_SESSION = [];