<?php
    include "../../connect.php";

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
                    echo `<script>alert("Congratulations! You have successfully booked a room!")</script>`;
                    header("Location: ../user/index.php");
                    exit;
                }
            } else {
                echo `<script>alert("Insufficient payment amount. Please try again.")</script>`;
                header("Location: ../user/payment.php");
                exit;
            }
        }
    }
?>