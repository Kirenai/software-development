<?php 
session_start();

if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}

$_SESSION["deleteall"] = false;


include "../app/controller/UserController.php";

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $file = "updateuser";
    $title = "Updating user";
    $userController = new UserController();
    $user = $userController->getUserById($id);
    $username = $user["username"];
    $password = $user["password"];
    $email = $user["email"];
    $firstName = $user["first_name"];
    $lastName = $user["last_name"];
} else {
    $file = "adduser";
    $title = "Add new user";
    $username = "";
    $password = "";
    $email = "";
    $firstName = "";
    $lastName = "";
}

?>
<?php include 'partials/header.php'; ?>

<div class="d-flex">
    <?php include 'partials/dashboard.php'; ?>
    <div class="row bg-dark vh-100" style="width: 80.45vw; overflow: auto;">
        <div class="p-4">
            <div class="row justify-content-md-center">
                <div class="text-center text-light">
                    <h1><?php echo $title ?></h1>
                </div>
                <div class="col-sm-5">
                    <form class="card-body" action="../app/index.php" method="POST">
                    <?php if (isset($_REQUEST['id'])) { ?>
                        <div class="mb-3 i">
                            <input class="form-control px-4" 
                                type="hidden" 
                                name="id" 
                                id="id" 
                                autofocus 
                                value="<?php echo $user["user_id"]; ?>" />
                        </div>
                    <?php } ?>
                        <div class="mb-3 i">
                            <label class="form-label text-light" for="username">Username</label>
                            <label class="fas fa-sign-in-alt icon" for="username"></label>
                            <input class="form-control px-4" 
                                type="text" 
                                name="username" 
                                id="username" 
                                autofocus 
                                placeholder="Your username" 
                                value="<?php echo $username; ?>" />
                        </div>
                        <div class="mb-3 i">
                            <label class="form-label text-light" for="password">Password</label>
                            <label for="password" class="fas fa-key icon"></label>
                            <input class="form-control px-4" 
                                type="password" 
                                name="password" 
                                id="password" 
                                placeholder="Your password" 
                                value="<?php echo $password; ?>" />
                        </div>
                        <div class="mb-3 i">
                            <label class="form-label text-light" for="email">Email</label>
                            <label for="email" class="fas fa-envelope-square icon"></label>
                            <input class="form-control px-4" 
                                type="email" 
                                name="email" 
                                id="email" 
                                placeholder="Your First name" 
                                value="<?php echo $email; ?>"/>
                        </div>
                        <div class="mb-3 i">
                            <label class="form-label text-light" for="firstname">First name</label>
                            <label for="firstname" class="fas fa-signature icon" style="font-size: 14px;"></label>
                            <input class="form-control px-4" 
                                type="text"
                                name="firstname" 
                                id="firstname" 
                                placeholder="Your First name" 
                                value="<?php echo $firstName; ?>"/>
                        </div>
                        <div class="mb-3 i">
                            <label class="form-label text-light" for="lastname">Last name</label>
                            <label for="lastname" class="fas fa-signature icon" style="font-size: 14px;"></label>
                            <input class="form-control px-4" 
                                type="text" 
                                name="lastname" 
                                id="lastname" 
                                placeholder="Your Last name" 
                                value="<?php echo $lastName; ?>"/>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary form-control" 
                                type="submit" 
                                name="<?php echo $file ?>" 
                                >Send.. <i class="fas fa-share-square"></i></button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>