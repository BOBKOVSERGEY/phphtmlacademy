<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .pagination {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .pagination__item {
      display: inline-block;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>
<?php
$pagesCount = 7;
$curPage = 1; ?>
<ul class="pagination">
  <?php
  while ($curPage <= $pagesCount) {
  ?>
    <li class="pagination__item">
      <a href="?page=<?php echo $curPage?>">
        <?php echo $curPage;?>
      </a>
    </li>
  <?php
  $curPage++; }
  ?>
</ul>
</body>
</html>
