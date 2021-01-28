<?php
session_start();

if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}
$_SESSION["deleteall"] = true;
include "../app/controller/UserController.php";
$userController = new UserController();
$users = $userController->getAllUsers();
?>
<?php include 'partials/header.php'; ?>

<div class="d-flex">
    <?php include 'partials/dashboard.php'; ?>
    <div class="row bg-dark vh-100" style="width: 80.45vw; overflow: auto;">
        <?php if (isset($_REQUEST['update'])) { ?>
            <div class="d-flex justify-content-md-center">
                <div class="col-md-4">
                    <div class="alert alert-<?php echo $_REQUEST['update']; ?> alert-dismissible fade show mt-4" role="alert">
                        User updated successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($_REQUEST['delete'])) { ?>
            <div class="d-flex justify-content-md-center">
                <div class="col-md-4">
                    <div class="alert alert-<?php echo $_REQUEST['delete']; ?> alert-dismissible fade show mt-4" role="alert">
                        User deleted successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($_REQUEST['info'])) { ?>
            <div class="d-flex justify-content-md-center">
                <div class="col-md-4">
                    <div class="alert alert-<?php echo $_REQUEST['info']; ?> alert-dismissible fade show mt-4" role="alert">
                        User do not deleted
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($_REQUEST['deleteall'])) { ?>
            <div class="d-flex justify-content-md-center">
                <div class="col-md-4">
                    <div class="alert alert-<?php echo $_REQUEST['deleteall']; ?> alert-dismissible fade show mt-4" role="alert">
                        All users deleted
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="d-flex mx-auto flex-wrap justify-content-center">
            <?php foreach ($users as $key1 => $value1) { ?>
                <div class="card bg-dark text-light border border-white m-2" style="height: 200px; width: 250px;">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5><?php echo $value1["username"]; ?></h5>
                        </div>
                        <p class="card-text badge bg-success"><?php echo $value1["email"]; ?></p><br>
                        <p class="card-text badge bg-info text-dark"><?php echo $value1["first_name"] . " " . $value1["last_name"]; ?></p>
                        <div class="text-center">
                            <a href="add-update-user.php?id=<?php echo $value1["user_id"]; ?>" 
                                class="btn btn-warning mx-1 text-light">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="../app/index.php?iddelete=<?php echo $value1["user_id"]; ?>" 
                                class="btn btn-danger mx-1">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>