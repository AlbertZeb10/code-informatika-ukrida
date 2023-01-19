<?php

    include('dbconn.php');

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $date = $_POST["date"];
        $gender = $_POST["gender"];
      
            $SQLinsert = "INSERT INTO users (name,email,password,date_of_birth,gender) 
            VALUES('$name','$email','$password','$date','$gender')";

    if($name == ""){
        echo "<p>Proses Pendaftaran Gagal.</p>";
        echo "<p>Proses Tidak Boleh Kosong.</p>";
        echo "<a href='registrasi.php' class='btn btn-primary'>Coba Lagi</a>";
    } else if($conn->query($SQLinsert)){
        echo "<p>Proses Pendaftaran Berhasil.</p>";
        echo "<a href='login.php' class='btn btn-primary'>Kembali Ke Home</a>";
    } else {
        echo "<p>Proses Pendaftaran Gaga;.</p>";
        echo "Error: " . $SQLinsert . "<br>" . $conn->error;
        echo "<a href='registrasi.php' class='btn btn-primary'>Coba Lagi</a>";
    }
?>