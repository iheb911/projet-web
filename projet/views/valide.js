var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');

function validated(){
    if (adresse.value.length < 9) {
        adresse.style.border = "1px solid red";
        adresse_error.style.display = "block";
        adresse.focus();
        return false;
    }

    if (password.value.length < 9) {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        password.focus();
        return false;
    }
}


