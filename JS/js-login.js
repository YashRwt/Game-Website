window.onload = checkLogin();     //Check to see if user is logged in already

function checkLogin() {
    if (sessionStorage.loggedInUsrEmail !== undefined) {
        //Extract details of logged in user
        let usrObj = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]);

        //Say hello to logged in user
        document.getElementById("loginPara").innerHTML = usrObj.name + " logged in.";
    }
}

//To logout the user
function logout() {
    sessionStorage.loggedInUser = undefined;
}

let cookies = document.cookie;

function login() {
    //Get email address
    let email = document.getElementById("emailInput").value;

    //User does not have an account
    if (localStorage[email] === undefined) {

        //Inform user that they do not have an account
        document.getElementById("loginFailure").innerHTML = "Email not recognized. Do you have an account?";
        return; //Do nothing else
    }
    else {   //User has an account

        //Convert to object
        let usrObj = JSON.parse(localStorage[email]);
        let password = document.getElementById("passwordInput").value;

        if (password === usrObj.password) {     //Successful login

            //Telling the User that they ae logged in
            document.getElementById("loginPara").innerHTML = usrObj.name + " logged in.";


            //updating the user in session storage
            sessionStorage.loggedInUsrEmail = usrObj.email;


        }
        else {      //letting the user know
            document.getElementById("loginFailure").innerHTML = "Password not correct. Please try again.";
        }
    }
}
