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
<?php
require_once __DIR__ . '/functionCutText.php';
?>
<div class="git">
  <h2 class="git__title"><a href=""><?php echo cutText($gif['title'], 50); ?></a></h2>
</div>
</body>
</html>
