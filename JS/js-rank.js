window.onload = rkinTable()

var info = {}

function rkinTable(){

        //Declaring head of the table
    let str = "<table class='table'><tr><th>Name</th><th>Email</th><th>Score</th></tr>";

        //using for function to enter data into the table format
    for (let key of Object.keys(localStorage)){
        //extracting info from the localstorage
        let info = JSON.parse(localStorage[key]);
        //Modiyfing data according to the table format
        str += "<tr><td>" + info.name + "</td><td>" + info.email + "</td><td>"+ info.Topscore + "</td></tr>"
    }
        //adding the last bit 
    str += "</table>"
        //pushing the table into the function with id tablebox
    document.getElementById("Tablebox").innerHTML = str
}