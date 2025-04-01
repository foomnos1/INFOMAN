<?php
    include "../../connect.php";

    if (isset($_POST['submit'])){
        $roomName = $_POST['roomName'];
        $roomType = $_POST['roomType'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];

        $fileName = $_FILES['file']['name'];
        $tmpName = $_FILES['file']['tmp_name'];

        $tempExtension = explode('.', $fileName);

        $fileExtension = strtolower(end(tempExtension));
        
        $newFileName = uniqid('', true). ".". $fileExtension;

        move_uploaded_file($tmpName, '../uploads/'. $newFileName);

        $query = mysqli_query($con, "INSERT INTO `rooms`(`room_name`, `room_type`, `filename`, `price`, `room_availability`) VALUES ('$roomName','$roomType','$newFileName','$price','$availability')");

        if ($query){
            header("Location: ../admin/admin.php");
        }
    }
?>