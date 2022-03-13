<?php
include_once 'db_connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$code = $_POST['mpesacode'];

$sql = "INSERT INTO 'users' ('idNo', `firstname`, `lastname`, `email`, `mpesa code`)
     VALUES ('$idNo', '$firstname', '$lastname','$email','$mpesacode');";
mysqli_query($conn, $sql);

header("Location: ../index.php?donate=success");


?>