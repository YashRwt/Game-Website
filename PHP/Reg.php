<?php
    //Calling the PHP functions 
    include('common.php'); 
	
    //Calling header and navigation 
    outputHeader("GTA - Registration");
    outputBannerNavigation("None");

    //calling CSS File
    CSS_File("styles-reg")
?>

        <!--Contents of Page-->

<div class="background">

    <div class="box">

        <h1 class="hdin">Registration</h1>
        
        <br>
                
        <h6 class= "IN-Para">     <!-- Registration input fields -->
            
            <br>Name:<br>
            <input type="Text" id="NameInput">
            <br>Lucky no:<br>
            <input type="number" id="NoInput" maxlength=13>
            <br>Email:<br>
            <input type="email" id="EmailInput">
            <br>Password:<br> 
            <input type="password" id="PasswordInput">
            <br>
            <button onclick="storeUser()" class='regbtn'>Register -></button>
        
        </h6>

        <!-- Result of registration displayed here -->
        
        <p id="Result" class="Result"></p>

    </div>    
</div>  
  
    <!--Linking The Javascript File-->

<script src="../JS/js-reg.js">
    </script>

<?php
    //Output the footer
    outputFooter();
