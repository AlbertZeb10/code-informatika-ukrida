<?php

    include('../../dbconn.php');
    require 'UploadIMG.php';

    // prepare and bind
    $stmt = $conn->prepare("UPDATE news SET title=?,content=?,authors_id=?,image=? WHERE id=?");
    $stmt->bind_param("ssssi", $title, $content, $authors, $image, $id);

    // set parameters
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $authors = $_POST['author'];

    if(isset($_FILES['image']) && $_FILES['image']['error'] !== 4){
        $image = uploadImage($_FILES['image'], '../../images/');
        if(!$image){
            echo "<p>Error.</p>";
            echo "<p>Upload image failed.</p>";
            echo "<a href='adminGallery.php' class='btn btn-primary'>Try Again</a>";
            return;
        }
    }else{
        // prepare and bind
        $stmt = $conn->prepare("UPDATE news SET title=?,content=?,authors_id=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $content, $authors, $id);
    }

    
    if($stmt->execute()){
        echo "<p>Edit data success.</p>";
        echo "<a href='adminGallery.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Edit data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminGallery.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>