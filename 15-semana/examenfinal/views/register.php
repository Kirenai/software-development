<?php
session_start();
if (isset($_SESSION["isLogged"])) {
    header("Location: ../views/home.php");
}
$_SESSION["deleteall"] = false;
?>
<?php include 'partials/header.php'; ?>

<?php if (isset($_REQUEST['info'])) { ?>
    <div class="d-flex justify-content-md-center">
        <div class="col-md-4">
            <div class="alert alert-<?php echo $_REQUEST['info']; ?> alert-dismissible fade show mt-4" role="alert">
                Account no registered, try again
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php } ?>

<div class="d-flex justify-content-md-center vh-100 bg-dark">
    <div class="col-md-4">
        <div class="card mt-2 bg-dark text-light border-white">
            <div class="text-center">
                <h1>Register</h1>
            </div>
            <form class="card-body" action="../app/index.php" method="POST">
                <div class="mb-3 i">
                    <label class="form-label" for="username">Username</label>
                    <label class="fas fa-sign-in-alt icon text-dark" for="username"></label>
                    <input class="form-control px-4" type="text" name="username" id="username" autofocus placeholder="Your username" />
                </div>
                <div class="mb-3 i">
                    <label class="form-label" for="password">Password</label>
                    <label for="password" class="fas fa-key icon text-dark"></label>
                    <input class="form-control px-4" type="password" name="password" id="password" placeholder="Your password" />
                </div>
                <div class="mb-3 i">
                    <label class="form-label" for="email">Email</label>
                    <label for="email" class="fas fa-envelope-square icon text-dark"></label>
                    <input class="form-control px-4" type="email" name="email" id="email" placeholder="Your First name" />
                </div>
                <div class="mb-3 i">
                    <label class="form-label" for="firstname">First name</label>
                    <label for="firstname" class="fas fa-signature icon text-dark" style="font-size: 14px;"></label>
                    <input class="form-control px-4" type="text" name="firstname" id="firstname" placeholder="Your First name" />
                </div>
                <div class="mb-3 i">
                    <label class="form-label" for="lastname">Last name</label>
                    <label for="lastname" class="fas fa-signature icon text-dark" style="font-size: 14px;"></label>
                    <input class="form-control px-4" type="text" name="lastname" id="lastname" placeholder="Your Last name" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control" type="submit" name="register" >
                        Send.. <i class="fas fa-share-square"></i>
                    </button>
                </div>
            </form>
            <div class="px-4">
                <p>
                    Are you registered? <a href="login.php"><span>Sign in</span> </a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>