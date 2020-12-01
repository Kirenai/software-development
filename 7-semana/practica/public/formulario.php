<?php include('./includes/header.php'); ?>
  <div class="container mx-auto mt-4">
    <h1 class="text-2xl sm:text-3xl lg:text-5xl xl:text-6xl text-center text-gray-100 my-4">Registro de estudiantes</h1>
    <form class="bg-gray-800 text-white px-10 lg:p-10 w-2/2 sm:w-2/3 lg:w-1/2 mx-auto rounded-lg shadow-2xl" action="registro.php" method="POST">
      <div class="p-4 block lg:flex justify-between">
        <label class="text-lg lg:text-xl" for="nombres">Nombres</label>
        <input class="h-8 w-full lg:w-auto rounded-lg lg:text-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent p-2" type="text" name="nombres" id="nombres" placeholder="Ingrese nombres"  autofocus>
      </div>
      <div class="p-4 block lg:flex justify-between">
        <label class="text-lg lg:text-xl" for="apellidos">Apellidos</label>
        <input class="h-8 w-full lg:w-auto rounded-lg lg:text-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent p-2" type="text" name="apellidos" id="nombres" placeholder="Ingrese apellidos">
      </div>
      <div class="p-4 block lg:flex justify-between">
        <label class="text-lg lg:text-xl" for="dni">DNI</label>
        <input class="h-8 w-full lg:w-auto rounded-lg lg:text-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent p-2" type="text" name="dni" id="dni" placeholder="Ingrese DNI">
      </div>
      <div class="p-4 block lg:flex justify-between">
        <label class="text-lg lg:text-xl" for="domicilio">Domicilio</label>
        <input class="h-8 w-full lg:w-auto rounded-lg lg:text-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent p-2" type="text" name="domicilio" id="domicilio" placeholder="Ingrese domicilio">
      </div>
      <div class="p-4 block lg:flex justify-between">
        <label class="text-lg lg:text-xl" for="lugarnacimiento">Lugar de nacimiento</label>
        <input class="h-8 w-full lg:w-auto rounded-lg lg:text-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent p-2" type="text" name="lugarnacimiento" id="lugarnacimiento" placeholder="Lugar de nacimiento">
      </div>
      <div class="p-4 block lg:flex justify-between">
        <button  class="bg-purple-800 hover:bg-purple-600 sm:text-lg md:text-xl w-full lg:w-64 lg:w-48 h-12 rounded-2xl lg:mx-auto block" type="submit">Registar estudiante</button>
      </div>
    </form>
  </div>
<?php include('./includes/footer.php'); ?>