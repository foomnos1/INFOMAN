<?php
    include "../../../connect.php";

    session_start();

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $roomName = $_POST['roomName'];
        $price = $_POST['payment'];

        $query = mysqli_query($con, "SELECT * FROM `rooms` where `room_name` = '$roomName'");
        while ($row = mysqli_fetch_assoc($query)){
            if ($price >= $row['price']){
                $sql = mysqli_query($con, "INSERT INTO `reservation` (`name`, `contact`, `room_number`, `check_in_date`, `check_out_date`) VALUES ('$name','$contact','$roomName','$checkIn','$checkOut')");

                if ($sql){
                    header("Location: ../user/success.php");
                }
            } else {
                header("Location: ../user/payment.php");
            }
        }
    }
?>