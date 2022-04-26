<?php
    //Calling the PHP functions 
    include('common.php'); 
	
    //Calling header and navigation 
    outputHeader("GTA - Login");
    outputBannerNavigation("Login");

    //calling CSS File
    CSS_File("styles-Login")
?>

<!-- Contents of the page -->

<div class="Shell" id="loginPara">  <!-- the big box-->

        <!-- Heading -->

    <h1> Registration/Login</h1>

        <!--Input Fields-->
    <p2 CLASS="fldnames">EMAIL<br>
    <input type="email" id="emailInput" class="emailInput">

    <br>PASSWORD<br><!-- BREAK-->

    <input type="password" id="passwordInput" class="passwordInput">
    </p2>

    <div class="bottombar"> <!-- BOX FOR LOGIN AND REGISTARTION BUTOON-->    
            
            <!-- REGISTRATION BUTTON-->
            
            <button type="button" class="regbtn" onclick="location.href='Reg.php'">
                <span class="button__text">Register</span>
            </button>

            <!-- LOGIN BUTOON-->

            <button class="logbtn" onclick="login()">
                <span class="button__text">Login</span>                
            </button>

        </div>

    <p id="loginFailure" ></p>
    
</div>
        
    <!--Linking The Javascript File-->
    
<script src="../JS/js-login.js">
    </script>

<?php
    //Output the footer
    outputFooter();
