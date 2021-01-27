<?php
session_start();
if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}
?>
<?php include 'partials/header.php'; ?>

<div class="d-flex">

    <?php include 'partials/dashboard.php'; ?>

    <div class="row bg-dark" style="width: 80.45vw;">
        <?php if (isset($_REQUEST['logged'])) { ?>
            <div class="d-flex justify-content-md-center">
                <div class="col-md-5">
                    <div class="alert alert-<?php echo $_REQUEST['logged']; ?> alert-dismissible fade show mt-4" role="alert">
                        Successful login
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>



</div>

<?php include 'partials/footer.php'; ?>