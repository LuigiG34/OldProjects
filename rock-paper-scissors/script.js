const computerChoiceSpan = document.getElementById('computer-choice');
const userChoiceSpan = document.getElementById('user-choice');
const resultSpan =  document.getElementById('result');
const differentChoices = document.querySelectorAll('button');
let userChoice;
let computerChoice;
let result;

differentChoices.forEach(differentChoices => differentChoices.addEventListener('click', (e) =>{
    userChoice = e.target.id;
    userChoiceSpan.innerHTML =`<div class="alert alert-primary" role="alert">`+userChoice+`</div>`;
    generateComputerChoice();
    getResult();
}))

function generateComputerChoice(){
    const randomNumber = Math.floor(Math.random() * differentChoices.length);

    if(randomNumber == 0){
        computerChoice = 'rock'
    }
    if(randomNumber == 1){
        computerChoice = 'paper'
    }
    if(randomNumber == 2){
        computerChoice = 'scissors'
    }
    computerChoiceSpan.innerHTML = `<div class="alert alert-secondary" role="alert">`+computerChoice+`</div>`;
}

function getResult(){
    if (computerChoice === userChoice){
        result = `<div class="alert alert-warning" role="alert">DRAW</div>`
    }
    if (computerChoice === 'rock' && userChoice === 'paper'){
        result = `<div class="alert alert-success" role="alert">USER WIN</div>`
    }
    if (computerChoice === 'rock' && userChoice === 'scissors'){
        result = `<div class="alert alert-danger" role="alert">USER LOSE</div>`
    }
    if (computerChoice === 'paper' && userChoice === 'scissors'){
        result = `<div class="alert alert-success" role="alert">USER WIN</div>`
    }
    if (computerChoice === 'paper' && userChoice === 'rock'){
        result = `<div class="alert alert-danger" role="alert">USER LOSE</div>`
    }
    if (computerChoice === 'scissors' && userChoice === 'rock'){
        result = `<div class="alert alert-success" role="alert">USER WIN</div>`
    }
    if (computerChoice === 'scissors' && userChoice === 'paper'){
        result = `<div class="alert alert-danger" role="alert">USER LOSE</div>`
    }
    resultSpan.innerHTML = result;
}