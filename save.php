<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "20212_wp2_412020012") or die("connection failed");
$sql = "INSERT INTO contact_us(name, email, phone, message) 
        VALUES ('{$name}','{$email}','{$phone}','{$message}' )";
$result = mysqli_query($conn, $sql) or die($conn->error);
header("location: http://localhost/pemrograman%20web%20II/uas/contact.php");
mysqli_close($conn);
?>