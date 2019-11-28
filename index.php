<!DOCTYPE html>
     <html> 
     <head> 
  <title>Document</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <head>
  <body>
<style>
a,
a img {
    border: none;
    text-decoration: none;
}
.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
}
</style>
</head>

<?php
$increment= filter_input(INPUT_GET, 'increment');
$size1=filter_input(INPUT_GET, "size1");
$size2=filter_input(INPUT_GET, "size2");
switch ($increment) {
    case 1:
        $size1 = $size1 + 15;
        break;
    case 2:
        $size2 = $size2 + 15;
        break;
    default:
        $size1 = 10;
        $size2 = 10;
        break;
}

?>
<div class="wrapper">
<a href= "index.php?&increment=1&size1=<?= $size1; ?>&size2=<?= $size2; ?>">
<img src='MoneyBag.png' height="<?= $size1?> width=<?= $size1 ?>
</a>

<a href= "index.php?&increment=2&size1=<?= $size1; ?>&size2=<?= $size2; ?>">
<img src='MoneyBag.png' height="<?= $size2?> width=<?= $size2 ?>"/>
</a>

</div>
  </body>
  </html>
