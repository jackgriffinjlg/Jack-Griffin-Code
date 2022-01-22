
function tipCalculator(service, price){
  switch (service) {
    case 'excellent':
    return price * 0.30;
        case 'good':
    return price * 0.20;
        case 'ok':
    return price * 0.15;
        case 'bad':
    return price * 0.05;
        default:
    return price * 0.18;
  }
};

