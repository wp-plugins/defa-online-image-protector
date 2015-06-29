<?php
//Written By Juthawong Naisanguansee
if(session_id() == ''){
     session_start(); 
}
 

$out2 = ob_get_contents();
if(strpos($out2,"<protect")){
  $file = dirname(__FILE__) . '/imageprotector.php';
$plugin_url= plugin_dir_url($file);
$plugin_url = wp_make_link_relative($plugin_url);
    ob_clean();
?>
<script>
document.addEventListener("contextmenu", function(e){
    if (e.target.nodeName === "IMG") {
        e.preventDefault();
    }
}, false);
</script>
<script type="text/javascript">


    function nocontext(e) {
        var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedTag == "IMG") {
            alert(alertMsg);
            return false;
        }
    }
    var alertMsg = "Image context menu is disabled";
    document.oncontextmenu = nocontext;

</script>
</script>

<style>
img{
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
-webkit-user-drag:none;
}
</style>
<style>
 @media print { img{ display:none } } 
video#my_video_1 {
  position:relative;
  z-index:0;
}
</style>
<script type="text/javascript">
//<![CDATA[
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
Disable context menu on images by GreenLava (BloggerSentral.com)
Version 1.0
You are free to copy and share this code but please do not remove this credit notice.
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */
    function nocontext(e) {
        var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedTag == "IMG") {
            alert(alertMsg);
            return false;
        }
    }
    var alertMsg = "Image context menu is disabled";
    document.oncontextmenu = nocontext;
//]]>
</script>

<?php


function getURL($matches) {
    if($_SESSION['defat']==""){
$_SESSION['defat'] = 1;
}else{
$_SESSION['defat'] = $_SESSION['defat'] + 1;
}
$file = dirname(__FILE__) . '/imageprotector.php';
$defa= plugin_dir_url($file);
$defa = wp_make_link_relative($defa);
$_SESSION['x'.$matches['2'].$_SESSION['defat']]=0;
$_SESSION['defa'.$matches['2'].$_SESSION['defat']] = md5(time()."Defa Protector");
$_SESSION['imdefa'.$_SESSION['defat']]=md5('Defa').base64_encode(base64_encode($matches['2']));
$_SESSION['x'.$matches['2']]=0;
$_SESSION['defa'.$matches['2']] = md5(time()."Defa Protector");
$_SESSION['file'.$_SESSION['defat']] = md5('Defa').base64_encode(base64_encode($matches['2']));
  return $matches[1] . $rootURL .$defa . "defaimage.php?window=".$_SESSION['window']."&defat=".$_SESSION['defat'];
}

$mes = preg_replace_callback("/(<img[^>]*src *= *[\"']?)([^\"']*)/i", getURL, $out2);

$mes = str_replace('<img','<img oncontextmenu="return false" ondragstart="return false;" ondrop="return false;"',$mes);
echo $mes;
}
?>
