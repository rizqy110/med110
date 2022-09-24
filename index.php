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
if(isset($_GET['dl1'])) {
  $url = $_GET['dl1'];
  header('location:dl1.php?url=https://kuramanime.com/anime/'.$url.'');
} else {

}
if(isset($_GET['dl2'])) {
  $url = $_GET['dl2'];
  header('location:dl2.php?url=https://kuramanime.com/anime/'.$url.'');
} else {

}
if(isset($_GET['blog'])) {
  $url = $_GET['blog'];
  $arr = array("https://www.areablog.space/2022/08/definition-of-lawyer-and-types-duties.html","https://www.areablog.space/2022/09/how-to-choose-lawyers-for-mesothelioma.html","https://www.areablog.space/2022/09/definition-of-mesothelioma-and-mesothelioma-lawyers.html","https://www.areablog.space/2022/08/how-to-become-lawyer-2022.html","https://www.areablog.space/2022/09/washington-dc-car-insurance-quotes.html","https://www.areablog.space/2022/08/10-game-android-terbaik-2022-offline.html","https://www.areablog.space/2022/08/divorce-lawyer-fee-details-letters.html","https://www.areablog.space/2022/08/7-game-multiplayer-offline-terbaik.html","https://www.areablog.space/2022/09/car-insurance-quotes-benefits-for-you.html","https://www.areablog.space/2022/09/small-business-insurance-what-really-is.html","https://www.areablog.space/2022/09/mesothelioma-law-firm-heres-full-explanation.html","https://www.areablog.space/2022/09/types-of-insurance-in-indonesia.html","https://www.areablog.space/2022/08/game-power-rangers-offline-di-android.html","https://www.areablog.space/2022/09/6-causes-of-rejected-car-insurance-claims.html","https://www.areablog.space/2022/09/how-to-claim-all-risk-car-insurance.html","https://www.areablog.space/2022/09/do-you-know-what-car-insurance-is.html","https://www.areablog.space/2022/09/7-reasons-why-your-business-needs-an-insurance-broker.html","https://www.areablog.space/2022/09/6-ways-to-submit-car-insurance-claim-so-that-it-can-be-processed-quickly.html","https://www.areablog.space/2022/09/looking-for-best-credit-life-insurance-company-heres-the-list.html","https://www.areablog.space/2022/09/here-are-five-benefits-of-life-insurance-and-its-types.html","https://www.areablog.space/2022/09/what-is-car-accident-lawyer-what-use-is-it-for-us.html","https://www.areablog.space/2022/09/what-you-need-to-find-personal-injury-lawyer.html","https://www.areablog.space/2022/08/how-do-i-find-good-personal-bankruptcy-attorney.html","https://www.areablog.space/2022/08/the-most-complete-type-of-car-insurance-and-the-easiest-way-to-claim.html","https://www.areablog.space/2022/08/how-to-find-lawyer-near-me-criminal.html","https://www.areablog.space/2022/08/what-is-lawyer.html","https://www.areablog.space/2022/08/7-game-online-pc-gratis-ringan.html","https://www.areablog.space/2022/08/aplikasi-edit-foto-android.html","https://www.areablog.space/2022/08/what-are-duties-of-lawyer-or-lawyer-in.html","https://www.areablog.space/2022/08/understanding-4-risks-that-life-insurance.html","https://www.areablog.space/2022/08/cara-memilih-laptop-yang-tepat-untuk-Pemrograman.html","https://www.areablog.space/2022/08/aplikasi-edit-video-terbaik.html","https://www.areablog.space/2022/08/note-these-are-5-insurances-that-millenials-must-have.html","https://www.areablog.space/2022/08/how-much-money-does-first-year-lawyer-make.html","https://www.areablog.space/2022/08/cara-memaksimalkan-kinerja-gpu-dan-cpu.html","https://www.areablog.space/2022/08/5-aplikasi-telepon-gratis-terbaik-untuk.html","https://www.areablog.space/2022/08/cara-meningkatkan-performa-pc-untuk-.html","https://www.areablog.space/2022/08/10-game-terbaik-untuk-android-di-dunia.html","https://www.areablog.space/2022/08/7-situs-web-untuk-stok-foto-gratis.html");
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
