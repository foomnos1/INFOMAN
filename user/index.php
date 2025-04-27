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

        header{
            display: flex;
            justify-content: space-between;
            padding: 0 50px;
            z-index: 1;
            background: white;
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
        <div class="card">
            <?php echo "<h2>Welcome, ". ucwords($_SESSION['username']) ."</h2>";?>
            <a href="book.php">Start booking!</a>
        </div>
    </div>
</body>
</html>

