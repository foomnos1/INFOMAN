<?php
	$con = mysqli_connect('localhost','root','','project');

	if (!$con){
		die('Connecion Failed'.mysqli_connect_error());
	}
?>
