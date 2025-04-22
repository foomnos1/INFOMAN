<?php
    include "../../connect.php";

    if (isset($_POST['submit'])){
        $roomName = $_POST['roomName'];
        $roomType = $_POST['roomType'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];

        $filename = $_FILES["file"]["name"];
        $tmpName = $_FILES["file"]["tmp_name"];
        $fileDestination = 'uploads/' . $filename;

        $query = mysqli_query($con, "INSERT INTO `rooms`(`room_name`, `room_type`, `filename`, `price`, `room_availability`) VALUES ('$roomName','$roomType','$filename','$price','$availability')");

        if ($query){
            move_uploaded_file($tmpName, $fileDestination);
            header("Location: ../admin/admin.php");
        }
    }
?>