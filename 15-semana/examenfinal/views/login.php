<?php
session_start();
if (isset($_SESSION["isLogged"])) {
    header("Location: ../views/home.php");
}
?>
<?php include 'partials/header.php'; ?>

<?php if (isset($_REQUEST['info'])) { ?>
    <div class="d-flex justify-content-md-center">
        <div class="col-md-4">
            <div class="alert alert-<?php echo $_REQUEST['info']; ?> alert-dismissible fade show mt-4" role="alert">
                Username or Password incorrect, try again
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (isset($_REQUEST['registered'])) { ?>
    <div class="d-flex justify-content-md-center">
        <div class="col-md-4">
            <div class="alert alert-<?php echo $_REQUEST['registered']; ?> alert-dismissible fade show mt-4" role="alert">
                You have registered, log in
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php } ?>
<div class="d-flex justify-content-md-center">
    <div class="col-md-4">
        <div class="card mt-4">
            <div class="text-center">
                <h1>Login</h1>
            </div>
            <form class="card-body" action="../app/index.php" method="POST">
                <div class="mb-3 i">
                    <label class="form-label" for="username">Username</label>
                    <label class="fas fa-sign-in-alt icon" for="username"></label>
                    <input class="form-control px-4" type="text" name="username" id="username" required autofocus placeholder="Your username" />
                </div>
                <div class="mb-3 i">
                    <label class="form-label" for="password">Password</label>
                    <label for="password" class="fas fa-key icon"></label>
                    <input class="form-control px-4" type="password" name="password" id="password" required placeholder="Your password" />
                </div>
                <div class="mb-3">
                    <input type="submit" name="login" class="form-control btn btn-primary" value="Enviar" />
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