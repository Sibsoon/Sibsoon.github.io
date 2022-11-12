<?php 
function headerObject($callerPath){
    echo '<!DOCTYPE html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="';
    echo getRelativePath($callerPath,ROOTPATH).'resources'.DIRECTORY_SEPARATOR.'bootstrap-5.2.2-dist'.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'bootstrap.min.css"'.'>';
    echo '<link rel="stylesheet" href="';
    echo getRelativePath($callerPath,ROOTPATH).'resources/css/style.css"'.'>';
    echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portfolio - mkjimp</title>
    </head>
    <body>
        <main>
        <div class="container">    <!-- container -->
    <div class="page-header">
        <div class="row title">
            <!-- <div class="col-md-4 title"> -->
            <a href="';
            echo getRelativePath($callerPath,ROOTPATH).'"';
            echo '<h1>MkJimP </h1></a>
            <h1><?php echo getRelativePath(__FILE__,ROOTPATH)."resources".DIRECTORY_SEPARATOR;?></h1>
            <h1><?php echo __FILE__?></h1>
            <!-- </div> -->
        </div>
    </div>
    <div id="links" class="fa-pull-right">
        <a href="https://twitter.com/Alpaculpa" target = "_blank" style=" color: black;
        text-decoration: none;"><i class="fab fa-twitter"></i></a>
        <a href=https://www.linkedin.com/in/michael-k-954750218 target = "_blank"style=" color: black;
        text-decoration: none;"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/mkjimp/" target="_blank"style=" color: black;
        text-decoration: none;"><i class="fab fa-instagram"></i></a>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills">
                <li><a href="';
    echo getRelativePath($callerPath,ROOTPATH).'"';
    echo '>OnGoing</a></li>
                <li><a href="';
    echo getRelativePath($callerPath,ROOTPATH).'funPage.php"';
    echo '>Fun</a></li>
                <li><a href="';
    echo getRelativePath($callerPath,ROOTPATH).'gamesPage.php"';
    echo '>Games</a></li>
                <li><a href="';
    echo getRelativePath($callerPath,ROOTPATH).'studiesPage.php"';
    echo '>Studies</a></li>
                <!-- <li><a href="';
    echo getRelativePath($callerPath,ROOTPATH).'aboutPage.php"';
    echo '>About</a></li> -->
                <li><a href="';
    echo getRelativePath($callerPath,ROOTPATH).'contactPage.php"';
    echo '>Contact</a></li>
            </ul>
        </div>
    </div>';
}
function footerObject($callerPath){
    echo '</div>
        <div class = "footer">
            <p class ="fa-pull-right">Copyright © 2022/2022 All Rights Reserved<br> <a href="';
    echo getRelativePath($callerPath,ROOTPATH).'index.php"';
    echo '>mkjimp</a> is Michael Keller</p>  
        </div>
            </main>
            <script src="';
    echo getRelativePath($callerPath,ROOTPATH).'resources/js/index.js"';
    echo '></script>
            <script src="';
    echo getRelativePath($callerPath,ROOTPATH).'resources/bootstrap-5.2.2-dist/js/bootstrap.js"';
    echo '></script>
        </body>
        </html>';
}


?> 


<?php

function contactForm(){
    
}


?>