var passwordField = document.getElementById("password");
var passwordChecker = document.getElementById("password-checker");

function validatePassword() {
  if (
    !passwordField.value.match(
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/
    )
  ) {
    passwordChecker.innerHTML =
      "Password harus minimal 8 karakter dan mengandung simbol, huruf kecil, huruf besar";
    return false;
  } else {
    passwordChecker.innerHTML = "";
    return true;
  }
}
