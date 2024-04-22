var emailField = document.getElementById("email");
var emailChecker = document.getElementById("email-checker");

function validateEmail() {
  if (
    !emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)
  ) {
    emailChecker.innerHTML = "Masukan email yang sesuai";
    return false;
  } else {
    emailChecker.innerHTML = "";
    return true;
  }
}
