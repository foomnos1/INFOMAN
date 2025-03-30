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
    <link rel="stylesheet" href="../baseColorAndTypeface.css">
    <style>
        /* Kamo na diri */
        /* Mubutang rako kung kailangan nako iri daan*/

        header{
            display: flex;
            justify-content: space-between;
            padding: 0 50px;
            z-index: 1;
        }

        header .right{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .container{
            display: flex;
        }

        .container .nav{
            position: fixed;
            left: 0;
            background: #f0f0f0;
            height: 100%;
            width: 25vw;
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .navLink{
            border-bottom: 1px solid black;
            width: 75%;
            display: flex;
            justify-content: center;
            padding-bottom: 5px;
        }

        .navLink a{
            text-decoration: none;
        }

        .body{
            height: 100%;
            overflow-y: scroll;
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
        <div class="nav">
            <div class="navLink">
                <a href="#">Home</a>
            </div>
            <div class="navLink">
                <a href="#">Home</a>
            </div>
        </div>
        <div class="body"></div>
    </div>
</body>
</html>

