<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML5 Login Form with validation Example</title>
    <link rel="stylesheet" href="css/style.css" />
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
        <p>
          <input type="submit" id="login" value="Login" />
        </p>
      </form>
    </div>
    <script src="js/validateEmail.js"></script>
    <script src="js/validatePass.js"></script>
  </body>
</html>
