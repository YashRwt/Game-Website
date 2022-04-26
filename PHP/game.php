<?php
    //To use the functions of Common.php 
    include('common.php'); 
	
    //Calling Header and Navigation Bar
    outputHeader("GTA - Game");;
    outputBannerNavigation("Game");

    //calling CSS File
    CSS_File("styles-Game")
?>


        <!--Contents of Page-->

    <!-- Score-->
<h2>Your score:</h2>
    <h2 id="score">0</h2>

    <!-- Timer-->
<h2>Time Left:</h2>
<h2 id="time-left">60</h2>

<div class="bckgrnd"> 

    <!-- The GameBox-->
    <div class="box">
        <!--9 GameBoxes-->
      <div class="hole" id="1"></div>
      <div class="hole" id="2"></div>
      <div class="hole" id="3"></div>
      <div class="hole" id="4"></div>
      <div class="hole" id="5"></div>
      <div class="hole" id="6"></div>
      <div class="hole" id="7"></div>
      <div class="hole" id="8"></div>
      <div class="hole" id="9"></div>

  </div>
   

</div>


<!--Linking The Javascript File-->

<script src="../JS/js-game.js"></script>

<!--Calling Footer-->

<?php
    outputFooter();
