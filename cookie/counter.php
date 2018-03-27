<?php
$visitCount = 1;
if (isset($_COOKIE['visit_count'])) {
  $visitCount = $_COOKIE['visit_count'] + 1;
}

setcookie('visit_count', $visitCount, strtotime('+30 days'), '/');

echo "Количество посещений {$visitCount}";