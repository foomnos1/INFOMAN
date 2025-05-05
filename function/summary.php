<?php
    session_start();

    if (isset($_POST['submit'])){
        $_SESSION['userName'] = $_POST['name'];
        $_SESSION['contact'] = $_POST['contact'];
        $_SESSION['checkInDate']= $_POST['checkIn'];
        $_SESSION['checkOutDate'] = $_POST['checkOut'];
        $_SESSION['checkOutDate'] = $_POST['id'];

        $_SESSION['id'] = $_POST['id'];

        header("Location: ../user/summary.php");
    }
?>