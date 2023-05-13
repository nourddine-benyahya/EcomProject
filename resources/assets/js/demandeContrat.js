// Sélectionner les éléments du formulaire
const form = document.querySelector('form');
const startDate = document.querySelector('#start-date');
const endDate = document.querySelector('#end-date');
const price = document.querySelector('#price');
const description = document.querySelector('#description');

// Ajouter un écouteur d'événement de soumission du formulaire
form.addEventListener('submit', (event) => {
event.preventDefault();

// supprimer tous les messages d'erreur existants
const existingErrors = document.querySelectorAll('.error');
existingErrors.forEach((error) => error.remove());

// valider chaque champ d'entrée
let errors = [];

if (startDate.value === '') {
errors.push({ field: startDate, message: 'Veuillez entrer une date de début.' });
}

if (endDate.value === '') {
errors.push({ field: endDate, message: 'Veuillez entrer une date de fin.' });
}

if (price.value === '') {
errors.push({ field: price, message: 'Veuillez entrer un prix.' });
}

if (description.value === '') {
errors.push({ field: description, message: 'Veuillez entrer une description.' });
}

// afficher les messages d'erreur pour chaque champ invalide
errors.forEach((error) => {
showError(error.field, error.message);
});

// soumettre le formulaire s'il n'y a pas d'erreurs
if (errors.length === 0) {
form.submit();
}
});

// fonction pour afficher les messages d'erreur
function showError(input, message) {
const error = document.createElement('div');
error.style.color = 'red';
error.style.padding='2px'
error.textContent = message;
if(input.parentNode.children.length<=2){
input.parentNode.insertBefore(error, input);
}
}




