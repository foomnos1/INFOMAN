<?php
    include "connect.php";
    include "../function/process.php";

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservation</title>
    <style>
        /* Kamo na diri */
    </style>
</head>
<body>
    

    <header>
        <div class="left"></div>
        <div class="right">
            <?php
                if (isset($_SESSION['username'])){
                    echo "
                        <p>". ucfirst($_SESSION['username']) ."</p>
                    ";
                }
            ?>
        </div>
    </header>
</body>
</html>

