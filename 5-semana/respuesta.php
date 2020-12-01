<?php

$userArray = array('username' => $_POST['username'], 'dni' => $_POST['dni'], 'age' => $_POST['age']);

?>

<?php include("includes/header.php"); ?>

<div class="container mt-4">
  <div class="card text-white bg-secondary mx-auto" style="max-width: 18rem;">
    <div class="card-header text-center">Persona</div>
    <div class="card-body">
      <h5 class="card-title">Persona Data</h5>
      <p class="card-text">Nombre: <?php echo $userArray['username'] ?></p>
      <p class="card-text">DNI: <?php echo $userArray['dni'] ?></p>
      <p class="card-text">Edad: <?php echo $userArray['age'] ?></p>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>