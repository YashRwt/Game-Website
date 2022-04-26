<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    
    //link to the Icon in Title bar
    echo '<link rel="icon" type="image/jpg" href="../images/icon.jpg"/>';

    //Link to external CSS File
    echo '<link rel="stylesheet" type="text/css" href="..//CSS/styles.css">';
    echo '</head>';
    echo '<body>';
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    echo '<div class="banner"><img class="navlg"src="../images/logo.png" height="60" alt="Logo "> GTA </div>';
    echo '<div class="navigation">';
    
    //Array of pages to link to
    $linkNames = array("Game","Rankings", "Tutorial", "About Us" ,"Login");
    $linkAddresses = array("gamepage.php","Rankings.php","tutorial.php","About.php","login.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';
}

//Outputs closing body tag and closing HTML tag
function outputFooter(){
    echo '</body>';
    echo '</html>';
}
//function for calling CSS file
function CSS_File($file_name){
    echo '<link rel="stylesheet" type="text/css" href="../CSS/' . $file_name . '.css">';
    }
?>