<?php
header('Access-Control-Allow-Origin: *');
if(isset($_GET['rr-av'])) {
  $url = $_GET['rr-av'];
  header('location:source.php?url=https://kuramanime.com/anime/'.$url.'');
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
<link rel="shortcut icon" href="logo.png" type="image/x-icon">

<meta name="description" content="Grabber RR-Anime KU">

</head>
<body>
  <a href="//rr-anime.pages.dev">RR-Anime</a>
</body>
</html>
