<!DOCTYPE html>
     <html> 
     <head> 
  <title>Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
<?php

$increment= filter_input(INPUT_GET, 'increment');
$size=filter_input(INPUT_GET, "size");

switch ($increment) {
    case 1:
        $size = $size + 15;
        break;
    case 2:
        $size2 = $size2 + 15;
        break;
    default:
        $size = 10;
        $size = 10;
        break;
}

$size = $size + 15;

$size2=filter_input(INPUT_GET, "size2");
$size2 = $size2 + 15;
?>
<a href= "index.php?size=<?= $size ?>">
<img src='MoneyBag.png' height="<?= $size?> width=<?= $size ?>&increment=1">
</a>

<a href= "index.php?size=<?= $size ?>size2&<?= $size2; ?>&increment=2">
<img src='MoneyBag.png' height="<?= $size2?> width=<?= $size2 ?>"/>
</a>

  </body>
  </html>
