<?php
require('../connection/db.php');

$firstname = $_POST['nombres'];
$lastname = $_POST['apellidos'];
$dni = $_POST['dni'];
$domicilio = $_POST['domicilio'];
$lugarnacimiento = $_POST['lugarnacimiento'];

$valida = false;
$message;
if (isEmpty($firstname, $lastname, $dni, $domicilio, $lugarnacimiento)) {
  try {
    $sql = 'INSERT INTO usuarios (`nombre`, `apellido`, `dni`, `domicilio`, `lugar_nacimiento`) 
            VALUES (:nombres, :apellidos, :dni, :domicilio, :lugarNacimiento)';
    $statement = $conn->prepare($sql);
    $statement->bindParam(':nombres', $firstname);
    $statement->bindParam(':apellidos', $lastname);
    $statement->bindParam(':dni', $dni);
    $statement->bindParam(':domicilio', $domicilio);
    $statement->bindParam(':lugarNacimiento', $lugarnacimiento);
    $statement->execute();
    $message = "El usuario fue registrado (click para cerrar)";
    $valida = true;
  } catch (\Throwable $th) {
    $message = $th->getMessage();
  }
} else {
  $message = "El usuario no pudo ser registrado (click para cerrar)";
}

function isEmpty($firstname, $lastname, $dni, $domicilio, $lugarnacimiento)
{
  if ($firstname === '' && $lastname === '' && $dni === '' && $domicilio === '' && $lugarnacimiento === '') {
    return false;
  }
  return true;
}

?>
<?php include('./includes/header.php'); ?>
  <div class="container mx-auto">
    <?php if ($valida) { ?>
      <div class='alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm'>
        <input type='checkbox' class='hidden' id='footertoast'>
        <label class='close cursor-pointer flex items-start justify-between w-full p-2 bg-green-500 h-24 rounded shadow-lg text-white' title='close' for='footertoast'>
          <?php echo $message; ?>
          <svg class='fill-current text-white' xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'>
            <path d='M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z'></path>
          </svg>
        </label>
      </div>
      <div class='text-center mt-6'>
        <h1 class='xl:text-5xl text-gray-100'>Usuario Registrado</h1>
        <div class='p-6'>
          <p class='p-2 text-xl text-gray-100'>Nombres del usuario: <span class='text-red-400'><?php echo $firstname; ?></span></p>
          <p class='p-2 text-xl text-gray-100'>Apellidos del usuario: <span class='text-red-400'><?php echo $lastname; ?></span></p>
          <p class='p-2 text-xl text-gray-100'>DNI del usuario: <span class='text-red-400'><?php echo $dni; ?></span></p>
          <p class='p-2 text-xl text-gray-100'>Domicilio del usuario: <span class='text-red-400'><?php echo $domicilio; ?></span></p>
          <p class='p-2 text-xl text-gray-100'>Lugar de nacimiento del usuario: <span class='text-red-400'><?php echo $lugarnacimiento; ?></span></p>
        </div>
      </div>
    <?php } else { ?>
      <div class='alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm'>
        <input type='checkbox' class='hidden' id='footertoast'>
        <label class='close cursor-pointer flex items-start justify-between w-full p-2 bg-green-500 h-24 rounded shadow-lg text-white' title='close' for='footertoast'>
          <?php echo $message; ?>
          <svg class='fill-current text-white' xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'>
            <path d='M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z'></path>
          </svg>
        </label>
      </div>
    <?php } ?>
    <div class="p-4 text-center">
      <a class='text-gray-100 hover:text-gray-400 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl p-6' href='formulario.php'>Regresar al formulario</a>
    </div>
  </div>
  <?php include('./includes/footer.php'); ?>