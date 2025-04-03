<?php
    include "../../connect.php";
    include "../function/process.php";

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Room</title>
    <link rel="stylesheet" href="../baseColorAndTypeface.css">
    <style>
        /* Kamo na diri */
        /* Mubutang rako kung kailangan nako iri daan*/

        html{
            scroll-behavior: smooth;
        }

        body{
            background: url(../images/backgroundAdmin.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        header{
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

        header .right{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .container{
            display: flex;
            flex-direction: column;
            margin-top: 80px;
            padding: 10px 0 0;
            gap: 25vh;
            align-items: center;
        }

        .content{
            background-color: white;
            width: 50%;
            padding: 25px;
            border-radius: 25px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .form{
            display: flex;
            flex-direction: column;
            gap: 5px;
            border: 2px solid black;
            border-radius: 15px;
            padding: 10px;
            width: 25vw;
        }

        .form button{
            background-color: var(--accent);
            border: none;
            border: 1px solid black;
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
                if (isset($_SESSION['username'])){
                    echo "
                        <p>Hello, ". ucwords($_SESSION['username']) ."</p>
                    ";
                }
            ?>
            <a href="../index.php"><img src="../images/logOut.svg" width="25px"></a>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <h1>Create a Room</h1>
            <form action="../function/create.php" method="POST" enctype="multipart/form-data">
                <div class="form">
                    <label>Room Name:</label>
                    <input type="text" name="roomName" required>
                    <label>Room Type:</label>
                    <select name="roomType" required>
                        <option default>--Please Choose a Room Type--</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Suite">Suite</option>
                        <option value="Family Suite">Family Suite</option>
                    </select>
                    <label>Room Picture</label>
                    <input type="file" name="file" required>
                    <label>Price</label>
                    <input type="number" name="price" required>
                    <input type="hidden" name="availability" value="available">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>