<?php
    session_start();

    if (isset($_POST['submit'])){
        $username = strtolower($_POST['username']);
        $password= $_POST['password'];

        $_SESSION['username'] = $username;

        if ($username === "admin" OR $password === "admin"){
            header("Location: ../admin/admin.php");
            exit();
        } else {
            header("Location: ../user/index.php");
            exit();
        }
    }
?>