<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Calling header and navigation 
    outputHeader("GTA - Rankings");
    outputBannerNavigation("Rankings");

    //calling CSS file
    CSS_File("styles-Ranking")
?>

<!-- Contents of the page -->

<div>
        <!-- THE RANKING TABLE-->
    <div id="Tablebox" class="Tablebox">
        </div>

        <!-- THE BANNER ON THE RIGHT-->

    <h1>
        Rankings
    </h1>
    
</div>

        <!-- LINK to the JS File-->
        
<script src="../JS/js-rank.js">
    </script>

<?php
    //Output the footer
    outputFooter();
?>
