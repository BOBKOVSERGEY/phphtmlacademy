<?php
$categories = [
  "Видеоигры",
  "Животные",
  "Леди",
  "Наука",
  "Приколы",
  "Спорт",
  "Файлы",
  "Фильмы"
];
?>

<div>
  <nav>
    <ul>
      <?php
      $index = 0;
      $num = count($categories);
      while ($index < $num) {
        $cat = $categories[$index];
        print ('<li><a href="#">' . $cat . '</a></li>');

        $index++;
      }
      ?>
    </ul>
  </nav>
</div>
