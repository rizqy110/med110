<?php
header('Access-Control-Allow-Origin: *');
if(isset($_GET['rr-av'])) {
  $url = $_GET['rr-av'];
  header('location:source.php?url=https://kuramanime.com/anime/'.$url.'');
} else {

}

if(isset($_GET['api'])) {
  $url = $_GET['api'];
$arr = array("https://anikatsu-api1.herokuapp.com/vidcdn/","https://anikatsu-api2.herokuapp.com/vidcdn/","https://api-chinese-anime.vercel.app/api/vidcdn/");
header('location:'.$arr[array_rand($arr)].$url.'');
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
if (isset($_GET['id'])) {
  $id = $_GET['id']; 
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

<meta name="description" content="Grabber Anime Twitter">
<style>
  .bc-1{background-color:#1f1f1f}
  .p-5{padding:5px}
  .br-3{border-radius:3px}
</style>

</head>
<body>
  <center><a class="bc-1 p-5 br-3" href="index.php?api=<?php echo $id; ?>">Play Anime Here</a></center>
</body>
</html>
