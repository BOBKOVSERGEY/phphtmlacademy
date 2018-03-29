<?php
session_start();
// пользователи для аутентификации
// пользователи для аутентификации
$users = [
  [
    'email' => 'ignat.v@gmail.com',
    'name' => 'Игнат',
    'password' => password_hash('123', PASSWORD_DEFAULT)
  ],
  [
    'email' => 'kitty_93@li.ru',
    'name' => 'Леночка',
    'password' => password_hash('456', PASSWORD_DEFAULT)
  ],
  [
    'email' => 'warrior07@mail.ru',
    'name' => 'Руслан',
    'password' => password_hash('789', PASSWORD_DEFAULT)
  ]
];

// поиск пользователя по email
function searchUserByEmail($email, $users)
{
  $result = null;
  foreach ($users as $user) {
    if ($user['email'] == $email) {
      $result = $user;
      break;
    }
  }
  return $result;
}


if (!empty($_POST)) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if ($user = searchUserByEmail($email, $users)) {
    if (password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user;
      header("Location: auth.php");
    } else {
      echo "Неверный пароль";
    }
  }
}


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form class="form" action="" method="post">
  <div class="form__column">
    <div class="form__row">
      <label class="form__label" for="email">E-mail:</label>
      <input class="form__input"
             type="text" name="email" id="email"
             value="" placeholder="Укажите e-mail">
    </div>
    <div class="form__row">
      <label class="form__label" for="password">Пароль:</label>
      <input class="form__input"
             type="password" name="password"
             id="password" placeholder="Введите пароль">
    </div>
  </div>
  <div class="form__controls">
    <input class="button form__control" type="submit" name=""
           value="Войти">
  </div>
</form>
<?php if (!isset($_SESSION['user'])): ?>
  <nav class="navigation__links">
    <a href="/signup">Регистрация</a>
    <a href="/signin">Вход для своих</a>
  </nav>
<?php else: ?>
  <nav class="navigation__links">
    <a href=""><?=strip_tags($_SESSION['user']['email']);?></a>
    <a href="/favorites">Избранное</a>
    <a href="logout.php">Выход</a>
  </nav>
<?php endif; ?>
</body>
</html>