<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
include(ROOTPATH.'php/featureContent.php');
headerObject(__FILE__);
// echo '<h1>'.basename(__FILE__).'</h1>';
?>
<p>
    The course <b>Computational Models of Motion</b> tackled a wide specturm of problems. The 
    challenge included forward and inverse kinematics with different ik solver techniques. 
    A boid simulation including collidable objects and different time integrations. The simulation of
    soft bodies using Finite Elements Method. Rigidbody dynamics by simulating springs
    friction and impulse based collision and trajectory optimization of a dummy 2d spaceship.
</p>
<?php
cmmContent(__File__);
footerObject(__FILE__);
?>
