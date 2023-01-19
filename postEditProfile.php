<?php
    session_start();
    include('dbconn.php');

    // prepare and bind
    $stmt = $conn->prepare("UPDATE users SET name=?,email=?,gender=?,
                            date_of_birth=? WHERE id=?");
    $stmt->bind_param("sssss", $name, $email, $gender, $date, $userId);

    // set parameters
    $userId = $_SESSION['userid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];

    if($stmt->execute()){
        echo "Edit profile success.";
    } else {
        echo "Edit profile failed.";
    }
    
    $stmt->close();
    $conn->close();
?>