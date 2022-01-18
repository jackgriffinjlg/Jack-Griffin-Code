let raceNumber = Math.floor(Math.random() * 1000);
var regEarly = true;
var runAge = 18;
if (runAge > 18 && regEarly){
  raceNumber += 1000;
} if(runAge > 18 && regEarly){
  console.log(`${raceNumber} Your race will start at 9:30 am.`);
} else if(runAge > 18 && !regEarly){
  console.log(`${raceNumber} Your race will start at 11:00 am.`);
} else if (runAge < 18 ){
  console.log(`${raceNumber} Your race will start at 12:30 am.`);
} else{
  console.log('Please see the registration desk');
}