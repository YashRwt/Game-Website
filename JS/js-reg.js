
function storeUser(){

        //Building object that we are going to store all the Input

    var info = {}

    info.name = document.getElementById("NameInput").value;
    info.no = document.getElementById("NoInput").value;
    info.email = document.getElementById("EmailInput").value;
    info.password = document.getElementById("PasswordInput").value;
    info.Topscore = 0


                                                    // Validation 
    
    if(info.name !== "" && info.no !=="" && info.email !=="" && info.password !==""){   //Any of the fields should be left Empty

            //Declaring variables

        var ln = info.no;
        var email = info.email;
        var pswd = info.password;

        var eml = email.trim();
        var x= pswd.length;  

        if (x < 8){         //Conditing for total 8 nos in Password

            alert("Password must be atleast 8 characters")

        }else{              //when Name is appropriate

            const signs = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if(signs.test(eml)){ //check Email                
                
                    //Store user
                localStorage[info.email] = JSON.stringify(info);
            
                    //Inform user of result
                document.getElementById("Result").innerHTML = "<b>Registration successful.</b>";
            
        
            }else {       //Incase the email is wrong

                alert('Email is not invalid');
                
            }
        }

    }else{      //if any of the fields r left empty

        alert("Please fill up the given fields" )
    }
}
    