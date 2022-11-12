<?php 
require($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'showInfo.php');
include(ROOTPATH.'php/pageElements.php'); 
headerObject(__FILE__);
?>
<p><b>Concept Island</b> is the proof of concept work for an earlier version of the MCTS Narrative planner from the
<a href="https://gtc.inf.ethz.ch/publications/open-source-software.html" target="_blank" rel="noopener noreferrer">Game Technology Center</a>
at ETH Zürich. It was created during my <a href="https://gtc.inf.ethz.ch/research/student-projects/defining-storyworlds.html" target="_blank" rel="noopener noreferrer">Bachelor Thesis</a>.
The <a href="https://github.com/ethz-gtc/npc-engine" target="_blank" rel="noopener noreferrer">NPCengine</a> was released under a public license in 2022.</p>
<img src="./resources/conceptIsland.png" alt="Concept Island" target="_blank" rel="noopener noreferrer"> 
<?php
footerObject(__FILE__);
?>
<style>
img{
  width: auto !important; /*override the width below*/
  width: 100%;
  max-width: 678px;
  float: left;
  clear: both;
}
</style>