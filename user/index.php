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


        .card{
            background: white;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 25vw;
            height: 50vh;
            justify-content: center;
            border-radius: 25%;
        }

        .card a{
            background: var(--accent);
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <?php include "../header.php"; ?>
    <div class="container">
        <div class="card">
            <h2>Welcome!</h2>
            <a href="book.php">Start booking!</a>
        </div>
    </div>
</body>
</html>

