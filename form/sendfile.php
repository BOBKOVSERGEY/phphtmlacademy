<?php
if (isset($_FILES['avatar'])) {
  $file = $_FILES['avatar'];
  echo ("Загружен файл с именем " . $file['name'] . " и
размером " . $file['size'] . " байт");

  // проверяем, а загружен ли файл
  if (is_uploaded_file($file['tmp_name'])) {
    $fileDir = "attachment/" . date('d-m-Y-H-i-s') . '-' . basename($file['name']);
    echo $fileDir;
    // откуда и куда перемещаем
    move_uploaded_file($file['tmp_name'], $fileDir);
  }

  echo '<pre>';
  print_r($_FILES);
  echo '</pre>';
}
?>

<form name="file_upload" method="POST" action="sendfile.php"
enctype="multipart/form-data">
<label>Ваш аватар: <input type="file"
name="avatar"></label>
<input type="submit" name="send" value="Отправить">
</form>