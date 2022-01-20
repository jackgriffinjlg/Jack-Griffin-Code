const getSleepHours = (day) => {
  if (day === 'monday') {
    return 6.5;
  } else if (day === 'tuesday') {
    return 6.5;
  } else if (day === 'wednesday') {
    return 6.5;
  } else if (day === 'thursday') {
    return 6.5;
  } else if (day === 'friday') {
    return 6.5;
  } else if (day === 'saturday') {
    return 7.5;
  } else if (day === 'sunday') {
    return 9;
  }
};
const getActualSleepHours = () => /*6 + 7 + 9 + 8 + 5 + 10 + 11;*/getSleepHours('monday') + getSleepHours('tuesday') + getSleepHours('wednesday') + getSleepHours('thursday') + getSleepHours('friday') + getSleepHours('saturday') + getSleepHours('sunday');

const getIdealSleepHours = () => {
  const idealHours = 9;
  return idealHours * 7;
};
//const getIdealSleepHours = idealHours => idealHours * 7;
const calculateSleepDebt = () => {
    const actualSleepHours = getActualSleepHours();
    const idealSleepHours = getIdealSleepHours(7);
    if (actualSleepHours === idealSleepHours){
  console.log('The user is well rested');
} else if ( actualSleepHours > idealSleepHours){
  console.log('The user slept too much, he overslept by ' + (actualSleepHours - idealSleepHours) + ' hours');
} else {
  console.log('The user did not sleep nearly enough, he is  ' + (actualSleepHours - idealSleepHours) + ' hours deficit, user slept ' + actualSleepHours + ' when they should have slept ' + idealSleepHours );
}
};
  console.log(getActualSleepHours()); // should print the sum of all sleep hours in the week
  console.log(getIdealSleepHours()); // if idealHours is 8, should print 56
calculateSleepDebt();