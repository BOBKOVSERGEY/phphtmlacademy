<?php
session_start();
$visitCount = 1;

if (isset($_SESSION['visit_count'])) {
  $visitCount = $_SESSION['visit_count'] + 1;
}

$_SESSION['visit_count'] = $visitCount;

print "Количество посещений: {$visitCount}";

