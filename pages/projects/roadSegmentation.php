<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
// echo '<h1>'.basename(__F ILE__).'</h1>';
?>

<p>
    For the computational intelligence lab we designed a machine learning model for a
    road segmentation task.
    Since road segmentation is a hard problem to solve due to its complexity regarding similarities
    in features, different scales, image contexts, and geographical differences.
    We, therefore, introduce a fusion of multiple concepts to tackle
    these issues. <br> 
    We used a combination of a <b>Unet</b> together with <b>Pyramid Pooling</b> Layers to enhance the 
    perception of the global context for a more robust result than other state-of-the-art models.
    Further we used a deicated pre- and post-processing for the data. As well as an ensemble technique 
    for more fine-grained control on the influence of different distributions.
    
</p>

<?php
footerObject(__FILE__);
?>

<!-- include some of the git things -->