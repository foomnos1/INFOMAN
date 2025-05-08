<?php
include "../../connect.php";
include "../function/process.php";

$id = $_GET['ID'];
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
            padding: 20px;
            border-radius: 50px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            gap: 10px;
            width: 75vw;
            background-color: white;
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

        .container .right {
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <h1>Lodging Reservation Management System</h1>
        </div>
        <div class="right">
            <?php
            if (isset($_SESSION['username'])) {
                echo "
                        <p>Welcome, " . ucwords($_SESSION['username']) . "</p>
                    ";
            }
            ?>
            <a href="../index.php"><img src="../images/logOut.svg" width="25px"></a>
        </div>
    </header>
    <div class="container">
        <div class="right">
            <form action="../function/summary.php" method="post">
                <div class="form">
                    <h1>Choose A Date</h1>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="hidden" name="userName" value="<?php echo ucwords($_SESSION['username']) ?>">
                    <div class="date">
                        <label>Contact</label>
                        <input type="text" name="contact" required>
                        <label>Check-In Date</label>
                        <input type="date" name="checkIn" required>
                        <label>Check-Out Date</label>
                        <input type="date" name="checkOut" required>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>