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
    <title>Room Reservation</title>
    <link rel="stylesheet" href="../baseColorAndTypeface.css">
    <style>
        /* Kamo na diri */
        /* Mubutang rako kung kailangan nako iri daan*/

        body{
            height: 100vh;
            overflow-y: hidden;
        }

        header{
            display: flex;
            justify-content: space-between;
            padding: 0 50px;
        }

        header .right{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .container{
            display: flex;
            height: 100%;
        }

        .container .nav{
            left: 0;
            background: #f0f0f0;
            width: 25%;
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
            width: 75%;
            overflow-y: auto;
        }

        #reservation{
            width: 75%;
            padding: 10px;
            border-radius: 25px;
            background-color: #fff /* e change ang color */
        }

        #reservation table{
            width: 100%;
            border-collapse: collapse;
        }

        #reservation table *{
            padding: 5px;
            text-align: center;
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
                <a href="#reservation">Renovations</a>
            </div>
            <div class="navLink">
                <a href="#">Add Rooms</a>
            </div>
            <div class="navLink">
                <a href="#">Update Rooms</a>
            </div>
            <div class="navLink">
                <a href="#">Delete Rooms</a>
            </div>
        </div>
        <div class="body">
            <div id="reservation">
                <table border=1>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Room Number Use</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                    </tr>
                    
                    <?php
                        $sql = mysqli_query($con, "SELECT * FROM reservation");
                        while($row = mysqli_fetch_assoc($sql)){
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
        </div>
    </div>
</body>
</html>