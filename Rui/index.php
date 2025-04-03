<?php require 'function.php'; ?>
<html>
    <head></head>
    <body>
         <table border = 1 cellpadding = 10 cellspacing = 0>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
            <?php
            $users = mysqli_query($conn, "SELECT * FROM users");
            $i = 1;

            foreach($users as $user) :
            ?>
            <tr>
                <td> <?php echo $i++; ?> </td>
                <td><?php echo $user["name"]; ?></td>
                <td> <img src="uploads/<?php echo $user["image"]; ?>" width="200"> </td>
                <td>
                    <a href="edituser.php?id=<?php echo $user['id']; ?>">edit</a>
                    <form class="" action="" method="post">
                        <button type="submit" name="submit" value = <?php echo $user['id']; ?>>Delete</button>
                    </form>
                </td>
            </tr
            <?php endforeach; ?>

         </table>
		 <br>
		 <a href="adduser.php">Add User Page</a>
    </body>
</html>