<?php
ob_start();
echo 'lipsum';
?>

<h1>Заголовок</h1>

<?php
// все что находится до того будет сохранено
$html = ob_get_clean();?>




