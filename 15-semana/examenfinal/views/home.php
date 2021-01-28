<?php
session_start();
if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}
$_SESSION["deleteall"] = false;

?>
<?php include 'partials/header.php'; ?>

<div class="d-flex">

    <?php include 'partials/dashboard.php'; ?>

    <div class="row bg-dark vh-100" style="width: 80.45vw; overflow: auto;">
        <?php if (isset($_REQUEST['logged'])) { ?>
            <div class="d-flex justify-content-md-center">
                <div class="col-md-5">
                    <div class="alert alert-<?php echo $_REQUEST['logged']; ?> alert-dismissible fade show mt-4" role="alert">
                        Sign in successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="text-light text-center mt-2">
            <h2>Home</h2>
        </div>
        <div class="card bg-dark p-6" style="height: 650px;">
            <div class="card m-4 mx-auto" style="width: 48rem;">
                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    



</div>

<?php include 'partials/footer.php'; ?>