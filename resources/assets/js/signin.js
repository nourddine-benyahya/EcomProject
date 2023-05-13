// Récupération de l'élément formulaire et ajout d'un événement de soumission
const form = document.getElementById('form_sign_in')
form.addEventListener('submit',(e)=>{
// Vérification de la validité de l'adresse email saisie
if (!validateEmail(emailInput.value)) {
errorEmail.innerHTML = "Veuillez saisir une adresse e-mail valide";
// Affichage du message d'erreur en dessous du champ email
emailInput.parentNode.insertBefore(errorEmail, emailInput);
// Empêche l'envoi du formulaire si l'email n'est pas valide
e.preventDefault()
}
// Vérification de la validité du mot de passe saisi
if (!validatePassword(passwordInput.value)) {
errorPassword.innerHTML = "Le mot de passe doit contenir au moins 6 caractères";
// Affichage du message d'erreur en dessous du champ mot de passe
passwordInput.parentNode.insertBefore(errorPassword, passwordInput);
// Empêche l'envoi du formulaire si le mot de passe n'est pas valide
e.preventDefault()
}
})

// Récupération des éléments de champ email et mot de passe
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

// Définition des expressions régulières pour valider les champs email et mot de passe
const emailRegex = /^[^\s@]+@[^\s@]+.[^\s@]+$/;
const passwordRegex = /^.{6,}$/;

// Création des éléments de message d'erreur et définition de la couleur rouge
const errorDiv = document.createElement("div");
const errorEmail = document.createElement("div");
const errorPassword = document.createElement("div");
errorDiv.style.color = "red";
errorPassword.style.color = "red";
errorEmail.style.color = "red";

// Fonction de validation de l'adresse email
function validateEmail(email) {
return emailRegex.test(email);
}

// Fonction de validation du mot de passe
function validatePassword(password) {
return passwordRegex.test(password);
}

// Ajout d'un événement de sortie de champ pour le champ email
emailInput.addEventListener("blur", function() {
if (!validateEmail(emailInput.value)) {
// Affichage du message d'erreur en dessous du champ email si l'email n'est pas valide
errorDiv.innerHTML = "Veuillez saisir une adresse e-mail valide.";
emailInput.parentNode.insertBefore(errorDiv, emailInput);
} else {
// Suppression du message d'erreur si l'email est valide
errorDiv.innerHTML = "";
}
});

// Ajout d'un événement de sortie de champ pour le champ mot de passe
passwordInput.addEventListener("blur", function() {
if (!validatePassword(passwordInput.value)) {
// Affichage du message d'erreur en dessous du champ mot de passe si le mot de passe n'est pas valide
errorDiv.innerHTML = "Le mot de passe doit contenir au moins 6 caractères";
passwordInput.parentNode.insertBefore(errorDiv, passwordInput);
} else {
// Suppression du message d'erreur si le mot de passe est valide
errorDiv.innerHTML = "";
}
});







