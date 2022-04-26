<?php
    //Calling PHP functions to be used on the page 
    include('common.php'); 
	
    //Calling header and navigation 
    outputHeader("GTA - Tutorial");
    outputBannerNavigation("Tutorial");
    
    //calling the CSS File for rest of the page
    CSS_File("styles-Tutorial")

?>

<!-- Contents of the page -->

<!-- THE BIG BOX-->
<div2 id="video" style="display: block";>

    <!-- THE BIG HEADING-->
    <h1>Tutorial</h1>

    <!-- THE PUNCH LINE-->
    <h6>Lets Make a New Record!</h6>

    <!--THELIVE IMAGE AT THE BOTTOM -->
    <img src=../images/tutorial.gif alt="Sample Vid" height= 400px>  
      
</div>



<?php
    //Output the footer
    outputFooter();
?>