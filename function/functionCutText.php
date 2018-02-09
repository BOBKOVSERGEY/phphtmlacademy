<?php
function cutText($text, $numLetters)
{
  $num = strlen($text);

  if ($num > $numLetters) {
    $text = substr($text, 0, $numLetters);
    $text .= "...";
  }

  return $text;
}

$gif = [
  'gif' => '/img/cat.gif',
  'title' => 'Yachtec was built on a love of yachting. Founded in 1984 by John Smith, renowned sailor and worldwide single-handed ocean racer',
  'author' => 'frexin',
  'likes_count' => 5
];