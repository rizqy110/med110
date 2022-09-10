<?php
include 'assets/simplehtmldom.php';
if(isset($_GET['id'])){
    $url = 'https://www.mediafire.com/file/'.$_GET['id'].'/';
    $status = 1;
}else{$url="";$status=0;echo "Mediafire error";die();}
$status = 1;
$html = file_get_html($url);
$directlink = $html->find('#downloadButton',0)->href;
header('location:'.$directlink.'');
?>