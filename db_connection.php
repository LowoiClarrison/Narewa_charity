<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$amount = $_POST['options'];

//database connection
$conn = new mysqli('localhost','root','','donate');
if ($conn->connect_error){
    die('Donation Failed :' .$conn->connect_error);
}else{
    die('Successfully donated');
}