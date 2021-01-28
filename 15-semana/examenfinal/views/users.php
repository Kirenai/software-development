<?php
session_start();

if (!isset($_SESSION["isLogged"])) {
    header("Location: ../views/login.php");
}

$_SESSION["deleteall"] = false;


include "../app/controller/UserController.php";
$userController = new UserController();
$users = $userController->getAllUsers();
?>
<?php include 'partials/header.php'; ?>

<div class="d-flex">
    <?php include 'partials/dashboard.php'; ?>
    <div class="row bg-dark vh-100" style="width: 80.45vw; overflow: auto;">
        <div class="p-4">
            <?php if (isset($_REQUEST['registered'])) { ?>
                <div class="d-flex justify-content-md-center">
                    <div class="col-md-4">
                        <div class="alert alert-<?php echo $_REQUEST['registered']; ?> alert-dismissible fade show mt-4" role="alert">
                            New user added
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key1 => $value1) { ?>
                        <tr>
                            <th scope="row"><?php echo $value1["user_id"]; ?></th>
                            <td><?php echo $value1["username"]; ?></td>
                            <td><?php echo $value1["email"]; ?></td>
                            <td><?php echo $value1["first_name"]; ?></td>
                            <td><?php echo $value1["last_name"]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>