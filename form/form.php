<?php
if (!empty($_POST)) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
}
?>
<form name="signup" method="POST" action="form.php">
  <div>E-mail: <input type="text" name="email"></div>
  <div>Логин: <input type="text" name="login">
  </div>
  <div>Сообщение: <textarea name="message"></textarea>
  </div>
  <input type="submit" name="send" value="Отправить">
</form>