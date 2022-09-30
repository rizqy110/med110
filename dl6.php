<?php
include 'assets/simplehtmldom.php';
header('Access-Control-Allow-Origin: *');
if(isset($_GET['get_html'])){
       header('Content-Type: application/json; charset=utf-8');
       echo file_get_html($_GET['get_html']);
       die();
}

if(isset($_GET['url'])){$url = $_GET['url'];}else{$url = "";}
$html = file_get_html($url);
$directlink = $html->find('.bg-white .mt-2 .mb-2 a',14)->href;
//$dlh = file_get_html($directlink);
//$link = $dlh->find('a',0)->href;
header('location:'.$directlink.'');
?>