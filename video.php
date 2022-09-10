<?php
if(isset($_GET['id'])){
    $url = 'index.php?rr-av='.$_GET['id'].'';
}else{$url="";$status=0;echo "Kuramanime error";die();}

?>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script type="text/javascript"> if(document.referrer.indexOf("https://mdf.hugonime.repl.co/") != -1) { window.location = "https://xxx.eroboom.pw"; } </script>
<style>
body{color:white;background:black;width:100%;height:100%;}
video{object-fit:contain;position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;background:black;display:none}
#allvideo{position:absolute;top:11px;right:11px;z-index:999999999;background-color:#ccc;color:#209cee}
</style>
<a id="allvideo" href="#" data-video="<?php echo $url ; ?>">Refresh Video</a>
<video id="plyr" autoplay="true" style="display:inline" controls="" controlslist="nodownload" playsinline="" webkit-playsinline="" src="<?php echo $url ; ?>"/>
<script>/*<![CDATA[*/
$("a#allvideo").click(function(e){e.preventDefault();$("a.server").removeClass("cur");$(this).addClass("cur");$("#plyr").attr("src",$(this).attr("data-video"));$("#plyr").show(500);});
/*]]>*/</script>