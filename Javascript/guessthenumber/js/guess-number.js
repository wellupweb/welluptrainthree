var currentNumber = generateRandomNumber();

console.log(currentNumber)



function generateRandomNumber(){
    var randomNumber = Math.random() * 100; // 12.123423 

    var exactRandomNumber = Math.floor(randomNumber);

    return exactRandomNumber;
}

document.getElementById("check-number").addEventListener('click',play)


function play(){
    var guessValue = document.getElementById("number-guess").value ;

    var guessNumber = parseInt(guessValue) // "34" to 34

    if(currentNumber > guessNumber){
        console.log("Too low");
    }else if ( currentNumber < guessNumber){
        console.log("Too High")
    }else{
        console.log("You Won")
    }

}
