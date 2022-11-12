<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
include(ROOTPATH.'php/featureContent.php');
headerObject(__FILE__);
// echo '<h1>'.basename(__FILE__).'</h1>';
?>

<p>This is a personal passion project I started working besides my studies. It is still work in progress. 
    The game let's you build railroads to collect resources, which you must deliver to the surface. 
    If you are lucky you will find a playable demo <a href="https://www.google.com" id="link">here</a>. 
</p>
<?php
ddContent(__FILE__);
footerObject(__FILE__);
?>
<style>
#link{
    color:hotpink;
    text-decoration: none;
}
#link:hover{
    color:greenyellow;
}
</style>
