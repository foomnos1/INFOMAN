<?php
    include "../../connect.php";
    include "../function/process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservation</title>
    <link rel="stylesheet" href="../baseColorAndTypeface.css">
    <style>
        /* Kamo na diri */
        /* Mubutang rako kung kailangan nako iri daan*/
        body{
            background-image: url(../images/backgroundUser.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        .container{
            display: flex;
            margin: 29vh 0 0;
            padding: 10px 0 0;
            justify-content: center;
        }

        .form{
            padding: 10px;
            border-radius: 50px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            gap: 10px;
            width: 75vw;
            background-color: white;
        }

        .form .left,
        .form .right{
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 3vw;
            border-radius: 25px;
        }

        .form h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include "../header.php"; ?>
    <div class="container">
        <form action="../function/confirmation.php" method="post">
            <input type="hidden" name="name" value="<?php echo $_SESSION['userName']?>">
            <input type="hidden" name="contact" value="<?php echo $_SESSION['contact']?>">
            <input type="hidden" name="checkIn" value="<?php echo $_SESSION['checkInDate']?>">
            <input type="hidden" name="Checkout" value="<?php echo $_SESSION['checkOutDate']?>">
            <div class="form">
            <h1>Payment</h1>
            <?php
                $id = $_SESSION['id'];

                $query = mysqli_query($con, "SELECT * FROM `rooms` where `id` = '$id'");
                while ($row = mysqli_fetch_assoc($query)){
            ?>
                <p>Required Payment: <span><?php echo $row['price']?></span></p>
                <input type="hidden" name="roomName" value="<?php echo $row['room_name']?>">

            <?php
                }
            ?>
            
            <label>Enter Payment</label>
            <input type="number" name="payment" required>
            <button type="submit" name="submit">Pay Now</button>
            </div>
        </form>
    </div>
</body>
</html>
