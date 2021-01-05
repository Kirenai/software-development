<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/index.css">
  <title>Register</title>
</head>

<body>
  <div class="form__container">
    <div>
      <h1>Register</h1>
    </div>
    <form class="form" action="auth/register-user.php" method="POST">
      <div class="form__inputs__container">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required autofocus placeholder="Your username" />
      </div>
      <div class="form__inputs__container">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required placeholder="Your password" />
      </div>
      <div class="form__inputs__container">
        <label for="firstname">First name</label>
        <input type="text" name="firstname" id="firstname" required placeholder="Your First name" />
      </div>
      <div class="form__inputs__container">
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" id="lastname" required placeholder="Your Last name" />
      </div>
      <div class="form__inputs__container">
        <input type="submit" />
      </div>
    </form>
    <div class="form__change">
      <p>
        Are you registered? <a href="login.php"><span>login here</span> </a>
      </p>
    </div>
  </div>
</body>

</html>