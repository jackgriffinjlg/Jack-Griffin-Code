const getUserChoice = userInput => {
  userInput = userInput.toLowerCase();
  if(userInput === 'rock' ||userInput === 'paper' ||userInput === 'scissors' || userInput === 'bomb') {
  return userInput
} else {
  console.log('Error!');
}
}
const getComputerChoice = () => {
  const randNum = Math.floor(Math.random() * 3);
  switch(randNum){
  case 0:
  return 'rock';
  case 1:
  return 'paper';
  case 2:
  return 'scissors';
}
}

const determineWinner = (getUserChoice, getComputerChoice) => {
  if (getUserChoice === 'bomb'){
    return 'Player wins by blowing everything up!'
  }
  if (getUserChoice === getComputerChoice) {
    return 'The game is a tie!';
  }
  if (getUserChoice === 'scissors') {
    if ( getComputerChoice === 'paper') {
   return 'The user is the winner!';
  } else {
    return 'The Computer is the winner';
  }
   }
   if (getUserChoice === 'rock') {
     if ( getComputerChoice === 'scissors'){
   return 'The user is the winner!';
  } else {
    return 'The Computer is the winner';
  }
   }
   if (getUserChoice === 'paper') {
     if( getComputerChoice === 'rock'){
   return 'The user is the winner!';
  } else {
    return 'The Computer is the winner';
  }
  }
}

const playGame = () => {
  const userChoice = getUserChoice('');
  const computerChoice = getComputerChoice();
  console.log('You threw: ' + userChoice);
  console.log('The computer threw: ' + computerChoice);
  console.log(determineWinner(userChoice, computerChoice));
};

playGame();