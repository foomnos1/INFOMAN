<?php
include "summary.php";

if (isset($_POST['submit'])) {
    header("Location: ../user/payment.php");
}
?>