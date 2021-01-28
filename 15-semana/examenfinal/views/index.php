<!-- 
    Según las clases desarrolladas, cree un proyecto con autenticación de usuario y dashboard, con base de datos.
    Usar: CSS
    Tema del proyecto: Sistema de almacen de; Autopartes, Restaurante, Gasolinera.
    Puntaje extra:
    * Boostrap (con CDN)
    * Imagenes
 -->

<?php
session_start();
$_SESSION["welcome"] = true;
$_SESSION["deleteall"] = false;

?>
<?php include 'partials/header.php'; ?>
<div class="bg-dark vh-100">
    <div class="container">
        <div class="text-light text-center pt-2">
            <h1>Bienvenido</h1>
        </div>
        <div class="d-flex justify-content-center text-light">
            <div class="p-4">
                <h3>Lenguajes usados</h3>
                <div class="list-group">
                    <li>PHP</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>SQL</li>
                </div>
            </div>
            <div class="p-4">
                <h3>Herramientas usados</h3>
                <div class="list-group">
                    <li>Bootstrap (CDN)</li>
                    <li>Font Awesome (CDN)</li>
                    <li>Google Fonts (CDN)</li>
                </div>
            </div>
            <div class="p-4">
                <h3>DBMS</h3>
                <div class="list-group">
                    <li>MySQL</li>
                </div>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/php.png" class="d-block w-50 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>PHP</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/html.png" class="d-block w-45 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/css.webp" width="27%" class="d-block w-45 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>CSS</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sql.png" width="25.7%" class="d-block mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SQL</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/bootstrap.png" width="32.2%" class="d-block mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bootstrap</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/fa.png" width="27%" class="d-block mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Font Awesome</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/mysql.png" width="52%" class="d-block mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MySQL</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>