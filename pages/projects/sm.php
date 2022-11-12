<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
include(ROOTPATH.'php/featureContent.php');
headerObject(__FILE__);
// echo '<h1>'.basename(__FILE__).'</h1>';
?>
<p>
    The course <b>Shape Modeling and Geometry Processing</b> demanded several implementations
    of various topics. The projects included surface reconstruction from point clouds. Mesh smoothing with
    different approaches. High frequency deformation transfer and skinned animations with different interpolation 
    methods. 

</p>
<?php
smContent(__FILE__);
footerObject(__FILE__);
?>