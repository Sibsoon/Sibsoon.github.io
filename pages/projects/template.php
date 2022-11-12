<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
echo '<h1>'.basename(__FILE__).'</h1>';
footerObject(__FILE__);
?>
