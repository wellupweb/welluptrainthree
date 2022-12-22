var currentNumber = generateRandomNumber();
var guesses = [];



function generateRandomNumber(){

    var randomNumber = Math.random() * 100; // 12.123423 

    var exactRandomNumber = Math.floor(randomNumber);

    return exactRandomNumber;
}

document.getElementById("check-number").addEventListener('click',play)
document.getElementById("reset-number").addEventListener('click',resetGame)

function resetGame(){
    currentNumber = generateRandomNumber();
    document.getElementById("number-guess").value = "";
    document.getElementById("result").innerHTML = "";
    guesses = [];
    displayHistory();

}


function play(){
    debugger;

    var guessValue = document.getElementById("number-guess").value ;

    var guessNumber = parseInt(guessValue) // "34" to 34


    if(currentNumber > guessNumber){
        console.log("Too low");
        document.getElementById('result').innerHTML = `<div class='alert alert-warning' role="alert">Too Low</div>`;
    }else if ( currentNumber < guessNumber){
        console.log("Too High")
        document.getElementById('result').innerHTML = `<div class='alert alert-danger' role="alert">Too High</div>`;
    }else{
        console.log("You Won")
        document.getElementById('result').innerHTML = `<div class='alert alert-success' role="alert">You Won</div>`;

    }

    guesses.push(guessNumber);

    displayHistory();
 


}

function displayHistory(){
    let i = 0;
    let list = `<ul class="list-group">`;
    while (i < guesses.length) {
        console.log(guesses[i]);
        list += `<li class="list-group-item"> You Guessed ${guesses[i]}</li>`
        i++;
    }
    list += `</ul>`

    document.getElementById('history').innerHTML = list;
}


