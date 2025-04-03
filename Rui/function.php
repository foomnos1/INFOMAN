<?php
$conn = mysqli_connect("localhost", "root", "", "crud");

if (isset($_POST["submit"])){
    if($_POST["submit"] == "add"){
        add();
    }
    else if($_POST["submit"]  == "edit"){
      edit();
    }
    else{
      delete();
    }
  }

  function add(){
    global $conn;

    $name = $_POST["name"];
    $filename = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file($tmpName, 'uploads/' . $newfilename);
    $query = "INSERT INTO users VALUES('', '$name', '$newfilename')";
    mysqli_query($conn, $query);

    echo
    "
    <script> alert('user Added Succesfully'); document.location.href = 'index.php'; </script>
    ";
  }
  
  function edit(){
	   global $conn;

    $id = $_GET["id"];
	$name = $_POST["name"];
	
	if($_FILES["file"]["error"] != 4){
    $filename = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file($tmpName, 'uploads/' . $newfilename);
    $query = "UPDATE users SET image = '$newfilename' WHERE id = $id";
    mysqli_query($conn, $query);
  }
  
  $query = "UPDATE users SET name = '$name'  WHERE id = $id";
    mysqli_query($conn, $query);
	
	echo
    "
    <script> alert('user Edited Succesfully'); document.location.href = 'index.php'; </script>
    ";
  }
  
  function delete(){
    global $conn;

    $id = $_POST["submit"];
  
  $query = "DELETE FROM users WHERE id = $id";
    mysqli_query($conn, $query);
	
	echo
    "
    <script> alert('user Deleted Succesfully') </script>
    ";
  }
  
  
  