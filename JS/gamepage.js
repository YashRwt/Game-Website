
    //function to direct the user to Game

function verify() { //checking weather user is logged in or not

    if (sessionStorage.loggedInUsrEmail !== undefined) {    //if user is logged in

        //directing the user to the game

        window.open('http://localhost/PHP/game.php', '_top')

    } else {    //if user is not logged in
        alert("Please log-In first")
    }
}
