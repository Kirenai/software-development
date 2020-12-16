<?php

class Registro
{
    private $firstName;
    private $email;
    private $phone;

    public function __construct()
    {
        $this->firstName = $_POST["name"];
        $this->email = $_POST["email"];
        $this->phone = $_POST["phone"];
        $this->subject = $_POST["subject"];
        $this->message = $_POST["message"];
    }

    public function get_registro()
    {
        return "
        <div>
            <p>Name: $this->firstName</p>
            <p>Email: $this->email</p>
            <p>Phone: $this->phone</p>
            <p>Subject: $this->subject</p>
            <p>Message: $this->message</p>
        </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="wrapper">
        <?php
        $registro = new Registro();
        echo $registro->get_registro();
        ?>
    </div>

    <div class="back">
        <a href="formulario.html">Back to Form</a>
    </div>
</body>

</html>