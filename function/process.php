<?php
    if (isset($_POST['submit'])){
        $username = strtolower($_POST['username']);
        
        if ($username === "admin" OR $username === "administrator"){
            header("Location: admin/admin.php");
        } else {
            header("Location: reservation.php");
        }
    }
?>