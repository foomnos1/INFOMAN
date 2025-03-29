<?php
    include "connect.php";
    include "login.php"
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
    <?php
        if (isset($_POST['submit'])){
    ?>
    
    <header>
        <div class="left"></div>
        <div class="right">
            <p>Hello, <?php echo $_POST['username']; ?></p>
        </div>
    </header>

    <?php
        }
    ?>

    
</body>
</html>