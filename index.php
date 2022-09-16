<?php
header('Access-Control-Allow-Origin: *');
if(isset($_GET['rr-av'])) {
  $url = $_GET['rr-av'];
  header('location:source.php?url=https://kuramanime.com/anime/'.$url.'');
} else {

}
if(isset($_GET['rr-av2'])) {
  $url = $_GET['rr-av2'];
  header('location:source2.php?url=https://kuramanime.com/anime/'.$url.'');
} else {

}
if(isset($_GET['ngentot'])) {
  $url = $_GET['ngentot'];
  $arr = array("https://www.funhealtykey.com/2022/09/4-recipes-to-gain-weight.html","https://www.funhealtykey.com/2022/07/dangers-of-oxidized-food.html","https://www.funhealtykey.com/2022/07/your-body-is-acidic-stop-consuming-sugar.html","https://www.funhealtykey.com/2022/06/3-ways-to-balance-bodys-acidic-ph.html","https://www.funhealtykey.com/2022/06/processed-products-and-leaky-gut.html","https://www.funhealtykey.com/2022/06/how-to-stop-feeling-sleepy-after-eating.html");
  header('location:'.$arr[array_rand($arr)].$url.'');
} else {
 
}
if(isset($_GET['rr-op'])) {
  $url = $_GET['rr-op'];
  header('location:iframe.php?url=https://65.108.132.145/'.$url.'');
} else {

}
if(isset($_GET['goo'])) {
  $url = $_GET['goo'];
  header('location:https://drive.google.com/uc?export=download&confirm=t&id='.$url.'');
} else {

}
if(isset($_GET['med'])) {
  $url = $_GET['med'];
  header('location:med.php?url=https://www.mediafire.com/file/'.$url.'');
} else {

}
if(isset($_GET['arc'])) {
  $url = $_GET['arc'];
  header('location:https://archive.org/download/'.$url.'');
} else {

}
if(isset($_GET['kur'])) {
  $url = $_GET['kur'];
  $arr = array("https://miyuki.my.id/0:/", "https://megumin.my.id/0:/","https://shinoaki.my.id/0:/","https://mushoku.my.id/0:/","https://liscia.my.id/0:/","https://iino.my.id/0:/","https://kaguya.my.id/0:/","https://nagisa.my.id/0:/","https://tonikawa.my.id/0:/","https://tantei.my.id/0:/","https://maou.my.id/0:/","https://asuna.my.id/0:/","https://juliet.my.id/0:/");
  header('location:'.$arr[array_rand($arr)].$url.'');
} else {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Save Anime</title>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="https://img.icons8.com/color/1080/tanjiro-kamado.png" type="image/x-icon">

<meta name="description" content="Grabber RR-Anime KU">

</head>
<body>
  <a href="//rr-anime.pages.dev">RR-Anime</a>
</body>
</html>
