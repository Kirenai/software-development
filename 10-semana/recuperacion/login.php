<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login</title>
  </head>
  <body>
    <div class="form__container">
      <div>
        <h1>Login</h1>
      </div>
      <form class="form" action="auth/validate-user.php" method="POST">
        <div class="form__inputs__container">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" required autofocus placeholder="Your username" />
        </div>
        <div class="form__inputs__container">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required placeholder="Your password" />
        </div>
        <div class="form__inputs__container">
          <input type="submit" />
        </div>
      </form>
      <div class="form__change">
        <p>
          You are not registered? <a href="register.php"><span>sign up here</span> </a>
        </p>
      </div>
    </div>
  </body>
</html>
