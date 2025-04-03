<?php 
require 'function.php'; 
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
?>
<html>
	<head></head>
	<body>
	 <form class="" action="" method="post" enctype="multipart/form-data">
            Name 
            <input type="text" name="name" value= "<?php echo $user['name']; ?>" required> <br>
            Image
            <input type="file" name="file" required> <br>
            <button type="submit" name="submit" value="edit">save</button>
     </form>
        <br>
        <a href="index.php">Index Page</a>
    </body>
</html>