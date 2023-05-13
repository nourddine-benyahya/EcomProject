// Récupération des éléments du DOM avec leur identifiant
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

// Ajout d'un écouteur d'événements sur le bouton d'inscription
signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active"); // Ajout d'une classe pour afficher le formulaire d'inscription
});

// Ajout d'un écouteur d'événements sur le bouton de connexion
signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active"); // Suppression d'une classe pour afficher le formulaire de connexion
});

// Fonction pour afficher l'image sélectionnée pour les influenceurs

function displayImage1(event) {
  var inputId = event.target.id; // Récupère l'ID de l'élément déclencheur
  var input = document.getElementById(inputId); // Récupère l'élément input correspondant
  var reader = new FileReader(); // Initialise l'objet FileReader
  reader.onload = function () { // Définit la fonction qui sera exécutée une fois le chargement terminé
    var image = document.getElementById('in_img'); // Récupère l'élément img correspondant
    if (image) {
      image.src = reader.result; // Affecte le résultat de la lecture à la source de l'image
      image.style.display = 'block'; // Affiche l'image
    } else {
      console.error('Image element not found!'); // Affiche un message d'erreur si l'élément img n'a pas été trouvé
    }
  };

  reader.readAsDataURL(input.files[0]); // Lit le contenu du fichier et le convertit en une chaîne de caractères encodée en base 64
}
// Fonction pour afficher l'image sélectionnée pour les brandes
// Cette fonction est similaire à displayImage1(), mais elle est utilisée pour afficher une image différente.

function displayImage2(event) {
  var inputId = event.target.id;
  var input = document.getElementById(inputId);
  var reader = new FileReader();
  reader.onload = function () {
    var image = document.getElementById('br_img');
    if (image) {
      image.src = reader.result;
      image.style.display = 'block';
    } else {
      console.error('Image element not found!');
    }
  };


  reader.readAsDataURL(input.files[0]);
}


// ------------------Validation d'inscription d'influenceur---------------------


// Récupération des éléments HTML
const btn1 = document.getElementById('btn1');
const form = document.getElementById('form1');
const firstNameInput = document.querySelector('input[name="firstName"]');
const emailInput = document.querySelector('input[name="email"]');
const password = document.getElementById('password')
const cpassword = document.getElementById('cpass')
const errorDiv = document.createElement("div");

// Définition des styles de la div d'erreur
errorDiv.style.color = "red";

// Expression régulière pour vérifier la longueur du mot de passe
const passwordRegex = /^.{6,}$/;

// Fonction pour afficher un message d'erreur
function showError(message, inputElement) {
  const errorElement = document.createElement("div");
  errorElement.innerHTML = message;
  inputElement.parentNode.insertBefore(errorElement, inputElement);
  errorElement.style.color = 'red'
  errorElement.style.margin = '2px'
}

// Fonction pour supprimer les messages d'erreur
function clearErrors(inputElement) {
  const errorElements = inputElement.parentNode.querySelectorAll("div");
  errorElements.forEach((errorElement) => errorElement.remove());
}
// fonction de validation 
function validateForm(event) {
  // Empêcher la soumission du formulaire
  event.preventDefault();

  // Initialiser la variable de validation
  let valid = true;

  // Valider le champ du prénom
  if (firstNameInput.value.trim() === "") {
    if (firstNameInput.parentNode.children.length < 2) {
      firstNameInput.parentNode.insertBefore(getErrorMessage('Veuillez entrer votre prénom.'), firstNameInput);

    }
    valid = false;
  } else {
    clearErrors(firstNameInput);
  }

  // Valider le champ de l'email
  if (emailInput.value.trim() === "" || !isValidEmail(emailInput.value)) {
    if (emailInput.parentNode.children.length < 2) {

      emailInput.parentNode.insertBefore(getErrorMessage('Veuillez entrer une adresse e-mail valide.'), emailInput);
    }
    valid = false;
  } else {
    clearErrors(emailInput);
  }

  // Valider le champ du mot de passe
  if (!validatePassword(password.value)) {
    if (password.parentNode.children.length < 2) {

      password.parentNode.insertBefore(getErrorMessage('Le mot de passe doit contenir au moins 6 caractères.'), password);
    }
    valid = false;
  } else {
    clearErrors(password);
  }

  // Valider le champ de confirmation du mot de passe
  if (cpassword.value !== password.value) {
    if (cpassword.parentNode.children.length < 2) {

      cpassword.parentNode.insertBefore(getErrorMessage('Assurez-vous que votre mot de passe et votre confirmation de mot de passe correspondent'), cpassword);
    }
    valid = false;
  } else {
    clearErrors(cpassword);
  }

  // Soumettre le formulaire si tout est valide
  if (valid) {
    form.submit();
  }
}




// Cette fonction vérifie si le mot de passe passé en paramètre correspond au regex défini
function validatePassword(password) {
  return passwordRegex.test(password);
}

// Lorsque l'utilisateur clique sur le bouton avec l'ID "btn1", on empêche son comportement par défaut 
// (dans ce cas, l'envoi du formulaire) et on appelle la fonction "validateForm" avec l'événement "e" en paramètre
btn1.addEventListener("click", (e) => {
  e.preventDefault()
  validateForm(e)
});



// ---------------------Validation d'inscription de la marque------------------------


// Déclaration des variables form2 et btn2
const form2 = document.getElementById('form2');
const btn2 = document.getElementById('btn2');

// Déclaration des variables nameInput et emailInput2
const nameInput = document.querySelector('input[name="name"]');
const emailInput2 = document.getElementById('e2');

// Déclaration des variables password2 et cpassword2
const password2 = document.getElementById('password2')
const cpassword2 = document.getElementById('cpass2')

// Création d'un élément div pour les messages d'erreur et définition de sa couleur
const errorDiv2 = document.createElement("div");
errorDiv2.style.color = "red";

// Définition d'une fonction nommée "validate"
function validate() {
  // Initialisation d'une variable isError à false
  let isError = false;

  // Vérification de la validité du champ de saisie "nameInput"
  if (nameInput.value.trim() === '') {
    // Si le champ est vide, insertion d'un message d'erreur et passage de isError à true
    if (nameInput.parentNode.children.length < 2) {
      nameInput.parentNode.insertBefore(getErrorMessage('Veuillez entrer le nom de la marque.'), nameInput);
    }
    isError = true;
  } else {
    // Sinon, effacement des messages d'erreur
    clearErrors(nameInput);
  }

  // Vérification de la validité du champ de saisie "emailInput2"
  if (!isValidEmail(emailInput2.value)) {
    // Si le champ n'est pas valide, insertion d'un message d'erreur et passage de isError à true
    if (emailInput2.parentNode.children.length < 2) {
      emailInput2.parentNode.insertBefore(getErrorMessage('Veuillez entrer une adresse e-mail valide.'), emailInput2);
    }
    isError = true;
  }
  else {
    // Sinon, effacement des messages d'erreur
    clearErrors(emailInput2);
  }

  // Vérification de la validité du champ de saisie "password2"
  if (!validatePassword(password2.value)) {
    // Si le champ n'est pas valide, insertion d'un message d'erreur et passage de isError à true
    if (password2.parentNode.children.length < 2) {
      password2.parentNode.insertBefore(getErrorMessage('Le mot de passe doit contenir au moins 6 caractères.'), password2);
    }
    isError = true;
  } else {
    // Sinon, effacement des messages d'erreur
    clearErrors(password2);

  }

  // Vérification de la correspondance des champs de saisie "password2" et "cpassword2"
  if (cpassword2.value != password2.value) {
    // Si les champs ne correspondent pas, insertion d'un message d'erreur et passage de isError à true
    if (cpassword2.parentNode.children.length < 2) {
      cpassword2.parentNode.insertBefore(getErrorMessage('Assurez-vous que votre mot de passe et votre confirmation de mot de passe correspondent'), cpassword2);
    }
    isError = true;
  } else {
    // Sinon, effacement des messages d'erreur
    clearErrors(cpassword2);

  }

  // Si aucun champ n'est invalide, envoi du formulaire
  if (!isError) {
    form2.submit();
  }

};

// Définition d'une fonction nommée "isValidEmail" prenant en paramètre une chaîne de caractères "email"
// Cette fonction retourne un booléen true si l'email est valide et false sinon
function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+.[^\s@]+$/.test(email);
}

// Définition d'une fonction nommée "getErrorMessage" prenant en paramètre un message d'erreur "message"
// Cette fonction crée une copie d'un élément div "errorDiv", y insère le message d'erreur et retourne cette copie
function getErrorMessage(message) {
  const errorDivClone = errorDiv.cloneNode();
  errorDivClone.innerHTML = message;
  return errorDivClone;
}

// Ajout d'un écouteur d'événements "click" sur le bouton "btn2"
btn2.addEventListener('click', (e) => {
  console.log('adb')
  e.preventDefault()
  // Appel de la fonction "validate" pour vérifier la validité des champs du formulaire
  validate()

})