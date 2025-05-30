<?php
include "../../connect.php";
include "../function/process.php";

$name = $_SESSION['userName'];
$contact = $_SESSION['contact'];
$checkIn = $_SESSION['checkInDate'];
$checkOut = $_SESSION['checkOutDate'];
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
        body {
            background-image: url(../images/backgroundUser.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        header {
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

        header .right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .container {
            display: flex;
            margin: 70px 10px 0;
            padding: 10px 0 0;
            justify-content: center;
        }

        .form {
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
        .form .right {
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 3vw;
            border-radius: 25px;
        }

        .rooms {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }

        .form h1 {
            text-align: center;
        }

        .summary {
            display: grid;
            grid-template-columns: auto auto;
            align-items: center;
            gap: 10px;
        }

        .summary label {
            text-align: end;
        }

        .summary input {
            width: 200px;
        }

        .room {
            border: 1px solid black;
            border-radius: 25px;
            padding: 10px;
            width: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .room img {
            width: 100px;
        }

        .form a,
        .form button {
            width: 100px;
            border: 1px solid black;
            border-radius: 25px;
            background-color: var(--accent);
            text-decoration: none;
            text-align: center;
            font-size: 13px;
        }

        .action {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .form h3 {
            margin-bottom: 0;
            text-align: center;
        }

        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include "../header.php"; ?>
    <div class="container">
        <form action="../function/payment.php" method="post">
            <div class="form">
                <h1>Summary</h1>
                <div class="summary">
                    <label>Name</label>
                    <input type="text" name="username" value="<?php echo $name ?>" readonly>
                    <label>Contact</label>
                    <input type="text" name="checkOut" value="<?php echo $contact ?>" readonly>
                    <label>Check-In Date</label>
                    <input type="text" name="checkIn" value="<?php echo $checkIn ?>" readonly>
                    <label>Check-Out Date</label>
                    <input type="text" name="checkOut" value="<?php echo $checkOut ?>" readonly>
                    <label>Room Chosen</label>
                    <div class="room">
                        <?php
                        $id = $_SESSION['id'];

                        $query = mysqli_query($con, "SELECT * FROM `rooms` where `id` = '$id'");
                        while ($row = mysqli_fetch_assoc($query)) {
                            ?>

                            <img src="../images/roomPhotos/<?php echo $row['id'] ?>.jpg">
                            <h3><?php echo $row['room_name'] ?></h3>
                            <p>Room Type: <?php echo $row['room_type'] ?></p>
                            <p>Price: <?php echo $row['price'] ?></p>

                            <?php
                        }
                        ?>
                    </div>
                </div>

                <h3>Is the above information correct?</h3>
                <div class="action">
                    <button type="submit" name="submit">Yes</button>
                    <a href="book.php">No</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>