// Form validation :
const form = document.getElementById('form');
const email = document.getElementById('form-email');
const password = document.getElementById('form-password');
const username = document.getElementById('form-username');

form.addEventListener('submit', (e) =>{
    checkInputs();
})

function checkInputs(){
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const usernameValue = username.value.trim();
    // for Username :
    if(usernameValue === ''){
        e.preventDefault();
        setErrorFor(username, 'Username cannot be Blank');
    }
    else if(!isUsername(usernameValue)){
        e.preventDefault();
        setErrorFor(username, 'Unvalid Username.');
    }
    // for Email.
    if(emailValue === ''){
        e.preventDefault();
        setErrorFor(email, 'Email cannot be Blank');
    }
    else if(!isEmail(emailValue)){
        e.preventDefault();
        setErrorFor(email, 'Email is not valid');
    }
    // for Password.
    if(passwordValue === ''){
        e.preventDefault();
        setErrorFor(password, 'Password cannot be Blank');
    }
}
function isEmail(email){
   return  /^[a-z0-9]+@[a-z]+.[a-z]{2,3}$/.test(email);
}
function isUsername(username){
    return /^[a-zA-Z0-9_-]{3,16}$/.test(username);
}
function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    small.innerText = message;

    //add Error class
    formControl.className = 'form-controls error';
}