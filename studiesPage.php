<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
require(getRelativePath(__DIR__,ROOTPATH).'php/featureContent.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
studyContent(__FILE__);
footerObject(__FILE__);
?>
