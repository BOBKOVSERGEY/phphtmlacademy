<?php
$gif = [
  'gif' => 'cat.jpg',
  'title' => 'Типичный юзер',
  'author' => 'frexin',
  'likes_count' => 5
];
$gifTwo = [
  'gif' => 'cat2.jpg',
  'title' => 'Типичный юзер 1',
  'author' => 'frexin 1',
  'likes_count' => 3
];
$gifThree = [
  'gif' => 'cat3.jpg',
  'title' => 'Типичный юзер 2',
  'author' => 'frexin 2',
  'likes_count' => 1
];

$gifs = [$gif, $gifTwo, $gifThree];
?>

<div class="list">
  <?php
  $index = 0;
  $num = count($gifs);
  
  while ($index < $num) {
    $gif = $gifs[$index];
    $index++;
  ?>
    <div class="list__item">
      <div class="list__item-img">
        <img width="300" src="<?php echo $gif['gif'];?>" alt="">
      </div>
      <div class="list__item-title">
        <h3><a href="#"><?php echo $gif['title']?></a></h3>
      </div>
      <div class="list__item-data">
        <div>@<?php echo $gif['author']?></div>
        <div><?php echo $gif['likes_count']?></div>
      </div>
    </div>
    <?php
  }
  ?>
</div>

