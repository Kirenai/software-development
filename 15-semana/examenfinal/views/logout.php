<?php
    session_start();
    session_destroy();

    $_SESSION["welcome"] = true;

    header("Location: index.php");
