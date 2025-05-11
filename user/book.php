<?php
include "../../connect.php";
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

        .roomCard {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5px;
            border-radius: 25px;
            height: 65vh;
            justify-content: center;
        }

        .roomCard button {
            padding: 10px 20px;
            text-decoration: none;
            background-color: var(--accent);
            color: white;
            border: none;
        }

        .roomCard img {
            width: 250px;
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

        .date {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }

        .date label {
            text-align: end;
        }

        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include "../header.php"; ?>
    <div class="container">
        <div class="right">
            <div class="form">
                <h1>Select A Room</h1>
                <div class="rooms">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM `rooms` WHERE `room_availability` = 'Available'");
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <form action="time.php" method="GET">
                            <div class="roomCard">
                                <input type="hidden" name="ID" value="<?php echo $row['id'] ?>">
                                <img src="../images/roomPhotos/<?php echo $row['id'] ?>.jpg">
                                <h3><?php echo $row['room_name'] ?></h3>
                                <p>Room Type: <?php echo $row['room_type'] ?></p>
                                <p>Price: <?php echo $row['price'] ?></p>
                                <button type='submit' name='submit' value="submit">Use Room</button>
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>