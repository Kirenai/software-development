<?php
if (isset($_SESSION["welcome"]) && $_SESSION["welcome"] === true) {
    $mainPath = "./index.php";
} else {
    $mainPath = "./home.php";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Examen Final</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom" style="z-index: 1;">
        <div class="container-fluid justify-content-between container">
            <a class="navbar-brand" href="<?php echo $mainPath ?>">Sistema</a>
            <button class="navbar-toggler ustify-content-end" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <?php if (isset($_SESSION["welcome"]) && $_SESSION["welcome"] === true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./login.php">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./register.php">Sign up</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./logout.php">Logout</a>
                        </li>
                    <?php } ?>
                    <?php if (isset($_SESSION["deleteall"]) && $_SESSION["deleteall"] === true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#" id="deleteall">Delete All</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>