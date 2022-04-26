<?php
    //To use the functions of Common.php 
    include('common.php'); 
	
    //Calling Header and Navigation Bar
    outputHeader("GTA - Game");;
    outputBannerNavigation("Game");

    //calling CSS File
    CSS_File("styles-Gamepage")
?>
    <!--Contents of the page-->

    <!-- Link to the actual Game-->
<button class="strbtn" onclick="verify()">
    </button>


<script src='../JS/gamepage.js'>
    </script>

<?php
    //Output the footer
    outputFooter();