var currentNumber = generateRandomNumber();



function generateRandomNumber(){
    var randomNumber = Math.random() * 100; // 12.123423 

    var exactRandomNumber = Math.floor(randomNumber);

    return exactRandomNumber;
}

document.getElementById("check-number").addEventListener('click',play)


function play(){
    var guessNumber = document.getElementById("number-guess").value ;

    if(currentNumber > guessNumber){
        console.log("Too low");
    }else if ( currentNumber < guessNumber){
        console.log("Too High")
    }else{
        console.log("You Won")
    }

}
