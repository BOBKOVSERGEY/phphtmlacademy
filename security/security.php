<?php
$data = "<script>alert('Hello!')</script>";

//преобразует в мнемоники
$hscData = htmlspecialchars($data);

// вырезает все теги
$stData = strip_tags($data);
echo $hscData;
echo $stData;