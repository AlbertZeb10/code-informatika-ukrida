<?php
require '../dbconnAdm.php';

if (isset($_POST['req'])) {
    $req = $_POST['req'];
    $id = $_POST['id'];
    if ($req == 'delete') {
        $action = 'delete';
        $sql = "DELETE FROM news WHERE id= $id ";
    }
} else {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $image = 'default';
    $data["msg"] = "";
    $data["result"] = "";
    if(isset($_FILES['image']) && $_FILES['image']['error'] !== 4){
        $image = uploadimage($_FILES['image'], '../images/');
        if(!$image){
            echo "<p>Error.</p>";
            echo "<p>Upload image failed.</p>";
            echo "<a href='AdmHome.php' class='btn btn-primary'>Try Again</a>";
            return;
        }
    }
    if ($id == "" || $id == null) {
        $action = "insert";
        if($image=='default'){
            $sql =  "INSERT INTO news (title,content,authors_id,image)
					VALUES('$title','$content','$author',$image)";
        }else {
            $sql =  "INSERT INTO news (title,content,authors_id,image)
					VALUES('$title','$content','$author','$image')";
        }
        
    } else {
        $action = "edit";
        if($image=='default'){
        $sql = "UPDATE news SET title = '$title', content = '$content', authors_id = '$author', image = $image WHERE id = $id";
        }else{
            $sql = "UPDATE news SET title = '$title', content = '$content', authors_id = '$author', image = '$image' WHERE id = $id";
        }
    }
}
if ($conn->query($sql)) {
    $data["result"] = true;
    $data["msg"] = " Proses " . $action . " berhasil ";
} else {
    $data["result"] = false;
    $data["msg"] = "Proses " . $action . "gagal ." .  " Error: " . $sql . "<br>" . $conn->error;
}
echo json_encode($data);
