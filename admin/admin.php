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
            margin: 70px 10px 0;
            padding: 10px 0 0;
            gap: 5vh;
        }

        .title{
            text-align: center;
        }

        #reservation, #rooms{
            width: 75%;
            padding: 25px;
            border-radius: 25px;
            background-color: #fff; /* e change ang color */
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

        #rooms a,
        #reservation a{
            text-decoration: none;
        }

        .action a{
            border: 1px solid black;
            background: var(--accent);
            color: white;
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
                    <th>Room Name</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Action</th>
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
                        <td class="action">
                            <a href="approveConfirmation.php?ID=<?php echo $row['id'];?>&RoomName=<?php echo $row['room_number'];?>">Approve</a>
                        </td>
                    </tr>
                <?php
                    }
                ?> 
            </table>
        </div>
        <div id="rooms">
            <h1 class="title">Rooms</h1>
            <table border=1>
                <tr>
                    <th>Room Name</th>
                    <th>Room Type</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Action</th>
                </tr>
                <?php
                    $sql2 = mysqli_query($con, "SELECT * FROM rooms");
                    while($row = mysqli_fetch_assoc($sql2)){
                ?>
                    <tr>
                        <td><?php echo $row['room_name'];?></td>
                        <td><?php echo $row['room_type'];?></td>
                        <td><img src="../images/roomPhotos/<?php echo $row['id']; ?>.jpg" width="100px"></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['room_availability'];?></td>
                        <td class="action">
                            <a href="roomUpdate.php?ID=<?php echo $row['id'];?>">Update</a>
                        </td>
                    </tr>
                <?php
                    }
                ?> 
            </table>
        </div>
    </div>
</body>
</html>