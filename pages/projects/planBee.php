<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
// echo '<h1>'.basename(__FILE__).'</h1>';
?>

<p>This is our lovely <b>GMTK Game Jam 2020</b> project. The game was created in 48 hours by a team of three peoples. Most of the artwork is 
done by ourselfs as well. You should visit the itch.io page for more information and a playable demo.</p>
<iframe frameborder="0" src="https://itch.io/embed/700842" style="display:block; background: #9d8e82; margin: 0 auto;" width="552" height="167"><a href="https://sibsoon.itch.io/planbeeweb">Plan Bee by Sibsoon, snugglebee, Shadow DA B0SS</a></iframe>
<?php
    footerObject(__FILE__);
?>

<!-- <style>
body{
    background-color: #0A004A;
    color: #222222;
}
.nav-pills>li>a,
.nav-pills>li>a:focus,
.nav-pills>li>a:hover {
    color:#222222;
}
.nav-pills>li>a:hover {
    color: #ffec0c
}
.nav-pills>li.active>a,
.nav-pills>li.active>a:focus,
.nav-pills>li.active>a:hover {
    color:#222222;
}
.container{
    background-color: #c3bcbc;
    color: #222222;
}
.footer{
    background-color: #948f8f;
}
</style> -->

<!-- do some nice design and embedd game -->