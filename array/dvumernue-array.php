<?php
$gif = [
  'gif' => '/img/cat.gif',
  'title' => 'Типичный юзер',
  'author' => 'frexin',
  'likes_count' => 5
];
$gifTwo = [
  'gif' => '/img/cat1.gif',
  'title' => 'Типичный юзер 1',
  'author' => 'frexin 1',
  'likes_count' => 3
];
$gifThree = [
  'gif' => '/img/cat2.gif',
  'title' => 'Типичный юзер 2',
  'author' => 'frexin 2',
  'likes_count' => 1
];

$gifList = [$gif, $gifTwo, $gifThree];

echo '<pre>';
print_r($gifList);
echo '</pre>';