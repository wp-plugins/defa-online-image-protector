<?php

ob_start();
if(session_id() == ''){
     session_start(); 
}
error_reporting(0);
$window = addslashes(strip_tags($_GET['window']));
$md5defa = md5('Defa');
$t = (int)$_GET['defat'];
$filedefa = str_replace($md5defa,'',$_SESSION['file'.$t]);
$file = base64_decode(base64_decode($filedefa));
$defa = base64_decode(base64_decode($filedefa));
$defaurl = get_headers($file, 1);
$url = $defaurl["Location"];
if($url!=$file&&$url!=""){
$file = $url;
}
if(strpos($file,'.php')){
die("We cannot let you access our php files");
}else{

//Written By Juthawong Naisanguansee at Ampare Engine
if(isset($_SESSION['jsenable'.$window])){
if($_SESSION['x'.$defa.$t]==0){
$_SESSION['x'.$defa.$t] = 1;

header("Content-Transfer-Encoding: binary");
header('Content-type: image/png');
header("Accept-Ranges: bytes");
header("Content-Disposition","inline");
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header('Content-type: image/png');
header("Content-Disposition","inline");
readfile($file);
die();
}}
}

?>
