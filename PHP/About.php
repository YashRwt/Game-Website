<?php
    //Calling PHP functions  
    include('common.php'); 
	
    //Calling header and navigation 
    outputHeader("GTA - About Us");
    outputBannerNavigation("About Us");

    //calling the CSS File for rest of the page
    CSS_File("styles-about")

?>

        <!-- Contents of the page -->

    <!-- heading -->
<h2>About <abbr title="Get Them All">GTA </abbr> </h2>


    <!-- Paragraph-->
<p>   Get Them All is an online version of a classic game named<cite> Whack A 
    Mole</cite>, which is a popular arcade game and carnival game, 
    originally known as Mogura Taiji in Japan where it was 
    invented by Kazuo Yamada in 1975 and it was a major 
    success in the commercial market of Japan after that it 
    made its first appearance to The International 
    Association of Amusement Parks and Attractions 
    (IAAPA) show in 1976 where it got retrofitted and 
    named Whack A Mole by Aaron Fetcher in 1977.

    </BR><!-- break in paragraph-->

    The programming languages like HTML, CSS, JavaScript
    and PHP for has been used for the development of this Game Website. [Exmaple Text]
</p>


<?php
    //Calling the footer
    outputFooter();
