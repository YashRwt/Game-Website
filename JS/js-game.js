// This is the javascript file the website

//declaring variables 

//Variables from the Game-page (HTML)
const holes = document.querySelectorAll('.hole')
const mole = document.querySelector('.mole')
const timer = document.querySelector('#time-left')
const score = document.querySelector('#score')

// Variables For the javafile 
let result = 0
let hitPosition
let currentTime = 60
let timerId = null


//Selecting random position for the Mole

function randomSquare() {

  //remove mole from last location
  holes.forEach(target => {
    target.classList.remove('mole')
  })

  //Selecting next loc for the Mole to appear
  let randomSquare = holes[Math.floor(Math.random() * 9)]
  randomSquare.classList.add('mole')

  hitPosition = randomSquare.id
}


//Adding up score for every succesfull hit 

holes.forEach(target => {
  target.addEventListener('mousedown', () => {

    //if user hits the right target

    if (target.id == hitPosition) {   //adding up the score
      result++
      score.textContent = result
      hitPosition = null
    }
  })
})


//Changing up Moles loc after a set interval of time

function movement() {
  timerId = setInterval(randomSquare, 500)
}

//Calling the function
movement()

// cOUNT DOWN FUNCTION 
function countDown() {

  currentTime--
  timer.textContent = currentTime

  if (currentTime == 0) {  //when then is 0
    clearInterval(countDownTimerId)
    clearInterval(timerId)

    //Declaring a object

    var info = {};

    //Extracting the info of the user

    info.name = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]).name
    info.no = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]).no
    info.email = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]).email
    info.password = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]).password
    info.Topscore = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail]).Topscore

    //if usr has scored higher than before 

    if (info.Topscore < result) {

      //Then it updates the highscore

      info.Topscore = result
      localStorage.setItem(sessionStorage.loggedInUsrEmail, JSON.stringify(info))
    }

    //Otherwise it just lets the user know about thier score

    alert('GAME OVER! Your final score is ' + result)
  }

}

let countDownTimerId = setInterval(countDown, 1000)

