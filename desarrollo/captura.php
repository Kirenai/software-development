<?php 

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captura</title>
</head>
<body>
  <p><?php echo $username; ?></p>
  <p><?php echo $password; ?></p>
  <p><?php echo $email; ?></p>
</body>
</html>