<?php
session_start();
include('dbconnAdm.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $conn->query("SELECT * FROM admin  
    WHERE email='$email' AND password='$password'");

    if($sql->num_rows === 1){
        $_SESSION['userid'] = $sql->fetch_assoc()['id'];


        echo "<p>Login Berhasil.</p>";
        echo "<a href='admhome.php' class='btn btn-primary'>Kembali ke halaman utama.</a>";
    } else {
        echo "<p>Proses insert gagal.</p>";
        echo "<p>Username atau password salah.</p>";
        echo "<a href='logadmin.php' class='btn btn-primary'>Coba Lagi</a>";
    }
?>