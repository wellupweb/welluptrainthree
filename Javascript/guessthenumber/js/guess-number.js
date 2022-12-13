var currentNumber = generateRandomNumber();

console.log(currentNumber);

function generateRandomNumber(){
    var randomNumber = Math.random() * 100; // 12.123423 

    var exactRandomNumber = Math.floor(randomNumber);

    return exactRandomNumber;
}
