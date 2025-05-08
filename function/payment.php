<?php
    include "summary.php";

    if (isset($_POST['submit'])){
    session_start();

    if (isset($_POST['submit'])){
        $name = $_SESSION['userName'];
        $contact = $_SESSION['contact'];
        $checkIn = $_SESSION['checkInDate'];
        $checkOut= $_SESSION['checkOutDate'];
        $id = $_SESSION['id'];

        header("Location: ../user/payment.php");
    }
    }
?>