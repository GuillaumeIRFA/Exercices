let age = parseInt(prompt('Votre âge ? '));
switch (true){
    case age >= 0 && age < 4:
        alert('Vous êtes un bébé');
        break;
    case age >= 4 && age < 12:
        alert('Vous êtes un enfant');
        break;
    case age >= 12 && age < 18:
        alert('Vous êtes un ZOOMER');
        break;
    case age >= 18 && age < 30:
        alert('Vous êtes un jeune adulte');
        break;
    case age >= 30 && age < 45:
        alert('Vous êtes un adulte confirmé');
        break;
    case age >= 45 && age < 65:
        alert('Vous êtes un BOOMER');
        break;
    case age >= 65:
        alert('Vous êtes un BOOMER confirmé');
        break;
    default:
        alert('Veuillez entrer un âge valide petit malin! F5 pour recommencer');
        break;
}