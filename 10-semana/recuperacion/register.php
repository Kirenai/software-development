<?php
session_start();

if (isset($_SESSION['usuario'])) {
  header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Register</title>
</head>

<body>
  <div class="container">
    <?php if (isset($_SESSION['no-add'])) { ?>
      <div class="row justify-content-md-center">
        <div class="col-md-4">
          <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
            <?php echo $_SESSION['no-add']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      <?php } ?>
      <div class="row justify-content-md-center">
        <div class="col-md-5">
          <div class="card mt-4">
            <div class="text-center">
              <h1>Register</h1>
            </div>
            <form class="card-body" action="index.php" method="POST">
              <div class="mb-3 text-start">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username"  autofocus placeholder="Your username" />
              </div>
              <div class="mb-3 text-start">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password"  placeholder="Your password" />
              </div>
              <div class="mb-3 text-start">
                <label class="form-label" for="firstname">First name</label>
                <input class="form-control" type="text" name="firstname" id="firstname"  placeholder="Your First name" />
              </div>
              <div class="mb-3 text-start">
                <label class="form-label" for="lastname">Last name</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Your Last name" />
              </div>
              <div class="mb-3">
                <input class="btn btn-primary form-control" type="submit" name="register" />
              </div>
            </form>
            <div class="form__change">
              <p>
                Are you registered? <a href="login.php"><span>login here</span> </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
      </script>
</body>

</html>