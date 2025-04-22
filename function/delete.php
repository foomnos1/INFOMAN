<?php
    include "../../connect.php";

    if (isset($_POST['submit'])){
        $id = $_POST['id'];
        
        $query = mysqli_query($con, "DELETE FROM `rooms` WHERE id='$id'");

        if ($query){
            header("Location: ../admin/admin.php");
        }
    }  
?>