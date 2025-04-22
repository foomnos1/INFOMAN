<?php
    include "../../connect.php";

    if (isset($_POST['submit'])){
        $id = $_POST['id'];

        $roomName = $_POST['roomName'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];

        $query = mysqli_query($con, "UPDATE `rooms` SET `room_name`='$roomName',`price`='$price',`room_availability`='$availability' WHERE id='$id'");

        if ($query){
            header("Location: ../admin/admin.php");
        }
    }  
?>