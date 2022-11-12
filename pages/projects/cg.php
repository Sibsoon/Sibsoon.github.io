<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
include(ROOTPATH.'php/featureContent.php');
headerObject(__FILE__);
?>
<p>
    This project is an educational ray tracer based on <a href="https://github.com/wjakob/nori">Nori</a> for
    the <b>Computer Graphics</b> lecture from ETH Zürich. The project included implementing 
    various basic functionalities as well as a selection of some more challenging tasks for the final submission.
    The basics include different lightsources like point lights, shape area lights 
    with their integrators. Different materials, multiple importance sampling, global illumination, path tracing
    and photon mapping.<br>
    Here are some impressions of my choosen advanced features, like participating media and progressive photon mapping.
</p>
<?php
    cgContent(__FILE__);
    footerObject(__FILE__);
?>
