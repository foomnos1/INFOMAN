<?php
    session_start();

    if (isset($_POST['submit'])){
        $username = strtolower($_POST['username']);

        $_SESSION['username'] = $username;

        if ($username === "admin" OR $username === "administrator"){
            header("Location: ../admin/admin.php");
            exit();
        } else {
            header("Location: reservation.php");
            exit();
        }
    }
?>