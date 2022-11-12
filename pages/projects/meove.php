<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
?>
<p>
<img src="./resources/Icon800V3.png" style="width: 300px; height:300px; display:block; margin: 0 auto;" alt="MEOVE icon" target="_blank" rel="noopener noreferrer"> 
<b>MEOVE</b> is our project submission for the 
<a href="https://gtc.inf.ethz.ch/education/game-programming-laboratory.html" target="_blank" rel="noopener noreferrer">Game Programming Laboratory</a> 
of ETH Zürich. It is an adventure puzzle game with the theme "Puss in Boots" by the Grim Brothers. The game was done from scratch with the minimalistic 
game engine <a href="https://www.monogame.net" target="_blank" rel="noopener noreferrer">Monogame</a>. We worked in a team of five students over a time span of three months.
We created everything from scratch. This includes the artistic parts like 3D modelling, 2D artwork, game music and soundtrack, shaders and UI. All the code was developped from 
scratch as well. The technical challenge for the course is the successful implementation of realtime skinned animations. A detailed report can be found <a href="https://gtc.inf.ethz.ch/education/game-programming-laboratory/previous-years/2021.html" target="_blank" rel="noopener noreferrer"> here</a>.
Unfortunately there is no playable version publicly available.
</p>
<div class="aspect-ratio">
  <iframe src="https://www.youtube.com/embed/dCkI-C5PTQ8?wmode=opaque&amp;rel=0&amp;autoplay=1" 
        width="550" height="275"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen=""
        style="display:block; margin: 0 auto;" iframe></iframe>
</div>

<?php
footerObject(__FILE__);
?>
<style>
/* This element defines the size the iframe will take.
   In this example we want to have a ratio of 25:14 */
.aspect-ratio {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; /* The height of the item will now be 56.25% of the width. */
}

/* Adjust the iframe so it's rendered in the outer-width and outer-height of it's parent */
.aspect-ratio iframe {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
</style>

<!-- link to game? -->
<!-- video maybe some art in webGL? -->
<!-- https://www.youtube.com/watch?v=Q7AOvWpIVHU -->