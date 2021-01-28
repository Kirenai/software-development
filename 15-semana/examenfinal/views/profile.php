<?php 
session_start();

if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}

$_SESSION["deleteall"] = false;


include "../app/controller/UserController.php";
$idUserLogged = $_SESSION["idlogged"];
$userController = new UserController();
$user = $userController->getUserById($idUserLogged);
$firstName = $user["first_name"];
$lastName = $user["last_name"];
$email = $user["email"];
?>

<?php include 'partials/header.php'; ?>

<div class="d-flex">
    <?php include 'partials/dashboard.php'; ?>
    <div class="row bg-dark vh-100" style="width: 80.45vw; overflow: auto;">
        <div class="p-4 mx-auto">
            <div class="card bg-dark border border-white" style="height: 650px;">
                <div class="card m-4 mx-auto" style="width: 48rem;">
                    <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Private Data</h5>
                        <p class="card-text"> <?php echo $firstName . " " . $lastName ?> </p>
                        <p class="card-text"><?php echo $email ?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>