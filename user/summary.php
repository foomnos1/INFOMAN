<?php
    include "../../connect.php";
    include "../function/process.php";
    include "../function/summary.php";

    session_start();
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

        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 1;
            background-color: white;
        }

        header .right{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .container{
            display: flex;
            margin: 70px 10px 0;
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

        .rooms{
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }

        .form h1{
            text-align: center;
        }

        .summary{
            display: grid;
            grid-template-columns: auto auto;
            align-items: center;
            gap: 10px;
        }

        .summary label{
            text-align: end;
        }

        .summary input{
            width: 100px;
        }

        .room{
            border: 1px solid black;
            border-radius: 25px;
            padding: 10px;
            width: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .room img{
            width: 100px;
        }
        .form a{
            width: 100px;
            border: 1px solid black;
            border-radius: 25px;
            background-color: var(--accent);
            text-decoration: none;
            text-align: center;
            font-size: 13px;
        }

        .action{
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .form h3{
            margin-bottom: 0;
            text-align: center;
        }

        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body><header>
        <div class="left">
            <h1>Lodging Reservation Management System</h1>
        </div>
        <div class="right">
            <?php
                if (isset($_SESSION['username'])){
                    echo "
                        <p>Welcome, ". ucwords($_SESSION['username']) ."</p>
                    ";
                }
            ?>
            <a href="../index.php"><img src="../images/logOut.svg" width="25px"></a>
        </div>
    </header>
    <div class="container">
        <form action="payment.php" method="post">
            <div class="form">
                <h1>Summary</h1>
                <div class="summary">
                    <label>Check-In Date</label>
                    <input type="date" name="checkIn" value="<?php echo $_SESSION['checkInDate']?>" readonly>
                    <label>Check-Out Date</label>
                    <input type="date" name="checkOut" value="<?php echo $_SESSION['checkOutDate']?>" readonly>
                    <label>Room Chosen</label>
                    <div class="room">
                        <?php
                            $room = $_SESSION['roomName'];
                            $id = $_SESSION['id'];

                            $query = mysqli_query($con, "SELECT * FROM `rooms` where `room_name` = '$room' AND `id` = '$id'");
                            while ($row = mysqli_fetch_assoc($query)){
                        ?>

                            <img src="../images/roomPhotos/<?php echo $row['id']?>.jpg">
                            <h3><?php echo $row['room_name']?></h3>
                            <p>Room Type: <?php echo $row['room_type']?></p>
                            <p>Price: <?php echo $row['price']?></p>

                        <?php
                            }
                        ?>
                    </div>
                </div>

                <h3>Is the above information correct?</h3>
                <div class="action">
                    <a href="payment.php">Yes</a>
                    <a href="book.php">No</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
