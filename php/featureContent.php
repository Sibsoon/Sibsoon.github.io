<!-- <div class="col-lg-6">
			<div class="well">
                <img class="img-fluid thumbnail" src="../resources/img/cbox_volpath_hetero_1000.png" alt="placeholder">
                <h2 class="text-center">Educational Raytracer</h2>
            </div>
		</div>	 -->

<?php 
$_projectPath = 'pages/projects/';
$_imagePath = 'resources/img/';
function contentBlock($name, $img, $ref){
    echo'
    <div class="col-lg-6">
        <a class="thumbnailhl" href='.$ref.'>
            <div class="well">
                <img class="img-fluid thumbnail" src='.$img.'>
                <h2 class="text-center"><small>'.$name.'</small></h2>
            </div>
        </a>
    </div>	'; 
}
function galleryBlock($name, $img){
    echo'
    <div class="col-lg-6">
        <div class="gridContenthl">
            <div class="well">
                <img class="img-fluid thumbnail" src='.$img.'>
                <h2 class="text-center"><small>'.$name.'</small></h2>
            </div>
        </div>
    </div>	'; 
}
function cgContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    echo'<div class="row">
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'cg3300300.png'.'>
            <h3 class="text-center"><small>Homogeneous Participating Media</small></h3>
        </div>
        <div>
            <img src='.$basePath.$_imagePath.'cg1300300.png'.'>    
            <h3 class="text-center"><small> Progressive Photon Mapper</small></h3>
        </div>
    </div>
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'cg2300300.png'.'>
            <h3 class="text-center"><small> Heterogeneous Participating Media</small></h3>
        </div>
        <div>
            <img src='.$basePath.$_imagePath.'cloud300300.png'.'>
            <h3 class="text-center"><small> Houdini Cloud Model</small></h3>
        </div>
    </div>
  </div>';
}

function smContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    echo'<div class="row">
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'pointCloud400400.png'.'>
            <h3 class="text-center"><small>Point Cloud Reconstruction</small></h3>
        </div>
        <div>
            <img src='.$basePath.$_imagePath.'smoothing400400.png'.'>    
            <h3 class="text-center"><small> Different Mesh Smoothing</small></h3>
        </div>
    </div>
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'deformation400400.png'.'>
            <h3 class="text-center"><small> Mesh deformation</small></h3>
        </div>
        <div>
            <img src='.$basePath.$_imagePath.'untitled1.gif'.'>
            <h3 class="text-center"><small> Skinned Animation</small></h3>
        </div>
    </div>
  </div>';
}

function cmmContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    echo'<div class="row">
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'fem.gif'.'>
            <h3 class="text-center"><small>Finite Elements Method Simulation</small></h3>
        </div>
    </div>
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'trajectory.gif'.'>    
            <h3 class="text-center"><small> Orbit Trajectory Simulation</small></h3>
        </div>
    </div>
  </div>';
}

function ddContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    echo'<div class="row">
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'dd400400.png'.'>
            <h3 class="text-center"><small>In Game Railways</small></h3>
        </div>
        <div>
            <img src='.$basePath.$_imagePath.'rails400400.png'.'>    
            <h3 class="text-center"><small> Railyway Assets</small></h3>
        </div>
    </div>
    <div class="column">
        <div>
            <img src='.$basePath.$_imagePath.'dd.gif'.'>
            <h3 class="text-center"><small>Early Gameplay</small></h3>
        </div>
        <div>
            <img src='.$basePath.$_imagePath.'cliffs400400.png'.'>
            <h3 class="text-center"><small>Cave Assets</small></h3>
        </div>
    </div>
  </div>';
}



function startGrid(){
    echo'<div class="container-fluid">
    <div class="row">'; 
}
function endGrid(){
    echo '</div>
    </div>';
}
function ongoingContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    startGrid();
    contentBlock("Deep Down",$basePath.$_imagePath.'dd400650.png',$basePath.$_projectPath.'dd.php'); 
    contentBlock("CanUCanoe",$basePath.$_imagePath.'canUcanoe650400.png',$basePath.$_projectPath.'canUcanoe.php'); 
    endGrid();
}

function studyContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    startGrid();
    contentBlock("Shape Modelling and Geometry Processing",$basePath.$_imagePath.'sm650400.png',$basePath.$_projectPath.'sm.php'); 
    contentBlock("Computational Models of Motion",$basePath.$_imagePath.'cmm650400.png',$basePath.$_projectPath.'cmm.php');
    contentBlock("Educational Raytracer",$basePath.$_imagePath.'cg.png',$basePath.$_projectPath.'cg.php');
    // contentBlock("Road Segmentation",$basePath.$_imagePath.'roadseg.png',$basePath.$_projectPath.'roadSegmentation.php');
    contentBlock("Concept Island",$basePath.$_imagePath.'conceptIsland.png',$basePath.$_projectPath.'conceptIsland.php'); 
    endGrid();
}
function gameContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    startGrid();
    contentBlock("Deep Down",$basePath.$_imagePath.'dd400650.png',$basePath.$_projectPath.'dd.php'); 
    contentBlock("CanUCanoe",$basePath.$_imagePath.'canUcanoe650400.png',$basePath.$_projectPath.'canUcanoe.php'); 
    contentBlock("Barson",$basePath.$_imagePath.'barson650400.png',$basePath.$_projectPath.'barson.php'); 
    contentBlock("MEOVE",$basePath.$_imagePath.'meove.png',$basePath.$_projectPath.'meove.php'); 
    contentBlock("Plan Bee",$basePath.$_imagePath.'planBee.png',$basePath.$_projectPath.'planBee.php'); 
    contentBlock("Concept Island",$basePath.$_imagePath.'conceptIsland.png',$basePath.$_projectPath.'conceptIsland.php'); 
    endGrid();
}
function funContent($callerPath){
    global $_imagePath;
    global $_projectPath;
    $basePath = getRelativePath($callerPath,ROOTPATH);
    startGrid();
    contentBlock("robin.topmodel.2018",$basePath.$_imagePath.'gntm.png',$basePath.$_projectPath.'gntm.php'); 
    contentBlock("Snowboarding",$basePath.$_imagePath.'snowboard.png',$basePath.$_projectPath.'sb.php'); 
    endGrid();
}
?>

