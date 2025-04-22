<?php
    include "../../connect.php";
    include "../function/process.php";
    $id = $_GET['ID'];
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
            align-items: center;
            gap: 5px;
            border: 2px solid black;
            border-radius: 15px;
            padding: 10px;
            width: 25vw;
            text-align: center;
        }

        .form button,
        .form a{
            background-color: var(--accent);
            border: 1px solid black;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 13px;
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
            <form action="../function/delete.php" method="POST">
                <div class="form">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <h1>Are you sure you want to delete this room?</h1>
                    <div class="btn">
                        <button type="submit" name="submit">Yes</button>
                        <a href="admin.php">No</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>