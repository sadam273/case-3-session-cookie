<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML5 Login Form with validation Example</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="login-form-wrap">
      <h2>Login</h2>
      <form id="login-form" action="process.php" method="post">
        <p>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            onkeyup = "validateEmail()"
            required
          />
        </p>
        <span id="email-checker"></span>
        <p>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            onkeyup = "validatePassword()"
            required
          />
        </p>
        <span id="password-checker"></span>
        <p>
          <input
            type="checkbox"
            id="remember-me"
            name="remember-me"
            value="remember"
          />
          <label for="remember-me"> Remember Me</label>
        </p>
        <div id="validate-email-pass"></div>
        <p>
          <input type="submit" id="login" value="Login" />
        </p>
      </form>
    </div>
    <script src="js/validateEmail.js"></script>
    <script src="js/validatePass.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var div = document.getElementById("validate-email-pass");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          if (xhr.responseText === "success") {
            // Redirect to profile.php if login is successful
            window.location.href = "profil.php";
          } else {
            // Alert error message if login fails
            div.innerHTML = "Periksa lagi password dan email anda!";
          }
        } else {
          // Handle AJAX error
          alert("An error occurred while processing your request.");
        }
      }
    };
    xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
  });
});
       
    </script>
  </body>
</html>
