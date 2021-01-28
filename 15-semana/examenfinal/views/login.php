<?php
session_start();
if (isset($_SESSION["isLogged"])) {
    header("Location: ../views/home.php");
}

$_SESSION["deleteall"] = false;

?>
<?php include 'partials/header.php'; ?>

<?php if (isset($_REQUEST['info'])) { ?>
    <div class="d-flex justify-content-md-center bg-dark">
        <div class="col-md-4">
            <div class="alert alert-<?php echo $_REQUEST['info']; ?> alert-dismissible fade show mt-4" role="alert">
                Username or Password incorrect, try again
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (isset($_REQUEST['registered'])) { ?>
    <div class="d-flex justify-content-md-center bg-dark">
        <div class="col-md-4">
            <div class="alert alert-<?php echo $_REQUEST['registered']; ?> alert-dismissible fade show mt-4" role="alert">
                You have registered, log in
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php } ?>
<div class="d-flex justify-content-md-center vh-100 bg-dark">
    <div class="col-md-4">
        <div class="card mt-4 bg-dark text-light border-white">
            <div class="text-center">
                <h1>Login</h1>
            </div>
            <form class="card-body " action="../app/index.php" method="POST">
                <div class="mb-3 i">
                    <label class="form-label" for="username">Username</label>
                    <label class="fas fa-sign-in-alt icon text-dark" for="username"></label>
                    <input class="form-control px-4" type="text" name="username" id="username" required autofocus placeholder="Your username" />
                </div>
                <div class="mb-3 i">
                    <label class="form-label" for="password">Password</label>
                    <label for="password" class="fas fa-key icon text-dark"></label>
                    <input class="form-control px-4" type="password" name="password" id="password" required placeholder="Your password" />
                </div>
                <div class="mb-3">
                    <button type="submit" name="login" class="form-control btn btn-primary">
                        Send.. <i class="fas fa-share-square"></i>
                    </button>
                </div>
            </form>
            <div class="px-4">
                <p>
                    You are not registered? <a href="register.php"><span>sign up here</span> </a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>