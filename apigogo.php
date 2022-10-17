<?php 
$id = $_GET['id'];
$json = file_get_contents("https://rr-avideo.herokuapp.com/index.php?api=$id");
$json = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Twitter player anime | English Subbed</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="referrer" content="no-referrer">
<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.8.6/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="64HPbvSQorQcd52B8XFuhMtEoitbvY/EXJmMBfKcXZQU2Rnn";</script>
<style type="text/css" media="screen">html,body{padding:0;margin:0;height:100%}#myElement{width:100%!important;height:100%!important;overflow:hidden;background-color:#000;border:none}#myElement{margin:0;background-image:url(https://service.acefile.co/assets/preload.svg);background-position:center;background-repeat:no-repeat}.p-f{position:fixed}.z-999{z-index:999}</style>
</head>
<body>
  <center class="p-f z-999">
<script type="text/javascript">
	atOptions = {
		'key' : '2ad3446d2654fa186816f6407cb887af',
		'format' : 'iframe',
		'height' : 60,
		'width' : 468,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://poplarwindowsmasculine.com/2ad3446d2654fa186816f6407cb887af/invoke.js"></scr' + 'ipt>');
</script>
  </center>
<div id="myElement">Loading...</div>
<script type="text/javascript">
  var playerInstance = jwplayer("myElement");
  playerInstance.setup({
    sources: <?php echo json_encode($json) ?>,
    autostart: true,
    title: "DNIMES PAGES",
    abouttext: "DNIMES",
    aboutlink: "https://dnimes.pages.dev"             
    });
  playerInstance.addButton(
   'https://img.icons8.com/external-flat-icons-inmotus-design/512/external-Download-round-mobile-ui-set-flat-icons-inmotus-design.png',
   'Download Anime', 
   function() {
     window.open(playerInstance.getPlaylistItem()['sources'][playerInstance.getCurrentQuality()].file+'?type=video/mp4', '_blank').focus();
   },
    'download anime'
  );
  </script>
</body>
</html> 