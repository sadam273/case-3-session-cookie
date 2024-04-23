<?php
//buat supaya jika sudah login tidak bisa mengakses halaman index
session_start();
if(isset($_SESSION['login'])){
  header("Location: profil.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="text-center d-flex align-items-center">
    <div class="wrapper">
      <main class="form-signin">
        <form id="login-form" action="process.php" method="post">
          <div class="container">
            <h1 class="h3 mb-3 fw-normal">Welcome to Case 3</h1>
            <h2 class="h3 mb-3 fw-normal">Please sign in</h2>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Email address</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="name@example.com"
                class="form-control"
                onkeyup = "validateEmail()"
                required
              />
              <div id="email-checker"></div>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Input your password"
                class="form-control";
                onkeyup = "validatePassword()"
                required
              />
              <div id="password-checker"></div>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" id="checkbox" value="remember-me" />
                Remember me
              </label>
            </div>
            <div class="col-auto">
            <input type="submit" id="login" value="Login" class="btn btn-primary mb-3"/>
              <div id="validate-email-pass"></div>
            </div>
          </div>
        </form>
      </main>
    </div>
    <script src="js/validateEmail.js"></script>
    <script src="js/validatePass.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); 
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
            window.location.href = "profil.php";
          } else {
            div.innerHTML = "Periksa lagi password dan email anda!";
          }
        } else {
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
