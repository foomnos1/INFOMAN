<?php
    include "../../connect.php";

    if (isset($_POST['submit'])){
        $id = $_POST['id'];
        $roomName = $_POST['roomName'];

        $sql1 = mysqli_query($con, "UPDATE `rooms` SET `room_availability` = 'Unavailable' WHERE `room_name` = '$roomName'");
        $sql2 = mysqli_query($con, "DELETE FROM `reservation` WHERE `id` = '$id'");

        if ($sql1 && $sql2) {
            header("Location: ../admin/admin.php");
        } 
    }
?>