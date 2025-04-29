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
            background-color: white;
            padding: 10px;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .roomCard{
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5px;
            width: 75vw;
            border-radius: 25px;
        }

        .roomCard button{
            padding: 10px 20px;
            text-decoration: none;
            background-color: var(--accent);
            color: white;
            border: none;
        }

        .roomCard img{
            width: 250px;
        }

        @media (max-width: 425px){
            .roomCard img{
                width: 150px;
            }

            header h1{
                font-size: 16px;
            }

            header .right p{
                display: none;
            }

            .form h1{
                text-align: center;
            }
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
        <div class="form">
            <h1>Select a Room</h1>
            <?php
                $query = mysqli_query($con, "SELECT * FROM `rooms` WHERE `room_availability` = 'Available'");
                while ($row = mysqli_fetch_assoc($query)){
            ?>
                <form action="time.php/?ID=<?php echo $row['id']?>" method="get">
                <div class="roomCard">
                    <img src="../images/roomPhotos/<?php echo $row['id']?>.jpg">
                    <h3><?php echo $row['room_name']?></h3>
                    <p>Room Type: <?php echo $row['room_type']?></p>
                    <p>Price: <?php echo $row['price']?></p>
                    <button type='submit' name='submit'>Use Room</button>
                </div>
            </form>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
