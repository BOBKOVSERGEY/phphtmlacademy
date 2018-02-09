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