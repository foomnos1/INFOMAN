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
            align-items: center;
            gap: 5vh;
        }

        .title{
            text-align: center;
        }

        #reservation, #rooms{
            width: 75%;
            padding: 25px;
            border-radius: 25px;
            background-color: #fff /* e change ang color */
        }

        #reservation table,
        #rooms table{
            width: 100%;
            border-collapse: collapse;
        }

        #reservation table *,
        #rooms table *{
            padding: 5px;
            text-align: center;
        }

        #rooms a{
            text-decoration: none;
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
        <div id="reservation">
            <h1 class="title">Reservations</h1>
            <table border=1>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Room Number Use</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                </tr>
                
                <?php
                    $sql1 = mysqli_query($con, "SELECT * FROM reservation");
                    while($row = mysqli_fetch_assoc($sql1)){
                ?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['room_number'];?></td>
                        <td><?php echo $row['check_in_date'];?></td>
                        <td><?php echo $row['check_out_date'];?></td>
                    </tr>
                <?php
                    }
                ?> 
            </table>
        </div>
        <div id="rooms">
            <h1 class="title">Rooms</h1>
            <a href="addRoom.php">
                <i class="bi bi-plus-circle"></i>
                Add a Room
            </a>
            <table border=1>
                <tr>
                    <th>Room Name</th>
                    <th>Room Type</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Availability</th>
                </tr>
                <?php
                    $sql2 = mysqli_query($con, "SELECT * FROM rooms");
                    while($row = mysqli_fetch_assoc($sql2)){
                ?>
                    <tr>
                        <td><?php echo $row['room_name'];?></td>
                        <td><?php echo $row['room_type'];?></td>
                        <td>different</td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['room_availability'];?></td>
                    </tr>
                <?php
                    }
                ?> 
            </table>
        </div>
    </div>
</body>
</html>