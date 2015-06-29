<?php
/*
Plugin Name: Defa Online Image Protector Free Edition
Plugin URI: http://ww2.juthawong.com/imageprotector
Description: Protect your image from being downloaded and hotlink as hard as we could
Version: 3.3
Author: Juthawong Naisanguansee
Author URI: http://www.juthawong.com/
License: GPL
*/
add_action('wp_head','defago2');
add_action('wp_footer', 'defaset23');
add_action('admin_menu', 'defadmin2_actions');
function defa2_admin() {
?>
<style>
html{

    line-height: 300%;
}
h1{
text-align:center;
padding:20px;
}
h2{
text-align:center;
padding:20px;
}

h3{
text-align:center;
padding:20px;
}
p{
padding:10px;
}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21366715-5', 'auto');
  ga('send', 'pageview');

</script>

  <h1>Welcome to Defa Protector Image FAQ and Help</h1>
<p>If you like our software . Please Donate us . We earn very little and work hard to give you the best quality software for free<br>
Donate us : <a href="http://www.juthawong.com/donate">Donate</a></p>
<p>or Use Our Commercial Award</p><br>
<p>&lt;iframe style=&quot;width:100%;height:auto;&quot; src=&quot;http://juthawong.com/commercialaward.php&quot;&gt;&lt;/iframe&gt;</p>
<p>
How to use ? : Add

&lt;protect&gt;&lt;/protect&gt;

to page html. It will automatically protect all image in page.

</p>
<p>
Caution : Image Protector can affect Google SEO Rank and Memory Usage on Page 
</p>
<p>
Common Problems : None<br>
Hope This Help
</p>
<p>Latest Upgrade :
Fix SSL Error Problem</p>
<div>
Please Visit Our Advertiser<br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive Ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6244029171510063"
     data-ad-slot="4983961519"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php
}

function defadmin2_actions() {

    $page_title = 'Defa Image Protector Engine FAQ and Help';
    $menu_title = 'Image Protector Help';
    $capability = 'manage_options';
    $menu_slug  = 'imageprotector-info';
    $function   = 'defa2_admin';
    $icon_url   = 'dashicons-media-code';
    $position   = 4;

    add_menu_page( $page_title,
        $menu_title,
        $capability,
        $menu_slug,
        $function,
        $icon_url,
        $position );
}
function defago2()
{
include( plugin_dir_path( __FILE__ ) . 'includetop.php');

}
function defaset23()
{

include( plugin_dir_path( __FILE__ ) . 'includebottom.php');
}


?>
