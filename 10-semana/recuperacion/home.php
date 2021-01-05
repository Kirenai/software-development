<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/index.css">
  <title>Home</title>
</head>

<body>
  <div class="container">
    <div>
      <h1>Home</h1>
    </div>
    <div>
      <p>Usuario : <?php echo $_SESSION['usuario']; ?></p>
    </div>
    <div>
      <p><a href="logout.php">log out</a></p>
    </div>
  </div>
</body>

</html>
