<!-- https://www.fsiddi.com/ -->
<!-- https://stackoverflow.com/questions/60678203/is-it-possible-to-use-live-server-for-php-with-autoreload-on-save -->
<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
?>

<div>
    <p>
    Welcome to my humble website. 
    </p>
    This is a collection of some of the projects I created over the years. <br>
    It has different sections, such as projects related to my studies/lectures, projects which I am passioned about and I have a lot of fun doing. <br>
    There is a collection of games I was involved, some are just Game-Jam project others a bit more serious. <br>
    Below you find the most recent project which are still 'under construction'. 
    <p>
        This website is for a fact also one of these projects. <br>
        Therefore I tried to create some unique experiences for the different projects.
    </p>
</div>
<br>

<?php 
require('php/featureContent.php');
ongoingContent(__FILE__);
footerObject(__FILE__)
?>
<!-- js Test
<br>
<input type="button" onclick="hello('test')" value="buttonName"> -->


