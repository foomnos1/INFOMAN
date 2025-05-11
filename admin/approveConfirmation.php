<?php
include "../../connect.php";
include "../function/process.php";

$id = $_GET['ID'];
$roomName = $_GET['RoomName'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="../baseColorAndTypeface.css">
    <style>
        /* Kamo na diri */
        /* Mubutang rako kung kailangan nako iri daan*/

        html {
            scroll-behavior: smooth;
        }

        body {
            background: url(../images/backgroundAdmin.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        header {
            display: flex;
            justify-content: space-between;
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
            margin: 29vh auto 0;
            padding: 10px 0 0;
            gap: 5vh;
            background-color: white;
            border-radius: 20px;
            justify-content: center;
            align-items: center;
            width: 50vw;
        }

        .container a,
        .container button {
            padding: 10px 20px;
            border: 1px solid black;
            border-radius: 25px;
            background-color: var(--accent);
            text-decoration: none;
            text-align: center;
            font-size: 13px;
            color: white;
            font-weight: 600;
        }

        button:hover {
            cursor: pointer;
        }

        .form{
            display: flex;
            align-items: center;
            gap: 20px;
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
                        <p>Hello, " . ucwords($_SESSION['username']) . "</p>
                    ";
            }
            ?>
            <a href="../index.php"><img src="../images/logOut.svg" width="25px"></a>
        </div>
    </header>
    <div class="container">
        <form action="../function/approve.php" method="post">
            <div class="form">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="roomName" value="<?php echo $roomName; ?>">
                <h1>Do you approve this book?</h1>
                <div class="action">
                    <button type="submit" name="submit">Yes</button>
                    <a href="admin.php">No</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>