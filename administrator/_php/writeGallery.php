<?php
require '../dbconnAdm.php';
require 'uploadimage.php';

if (isset($_POST['req'])) {
    $req = $_POST['req'];
    $id = $_POST['id'];
    if ($req == 'delete') {
        $action = 'delete';
        $sql = "DELETE FROM gallery WHERE id= $id ";
    }
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = "default";
    if(isset($_FILES['image']) && $_FILES['image']['error'] !== 4){
        $image = uploadimage($_FILES['image'], '../../images/');
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
            $sql =  "INSERT INTO gallery (name,image)
					VALUES('$name',$image)";
        }else {
            $sql =  "INSERT INTO gallery (name,image)
					VALUES('$name','$image')";
        }
        
    } else {
        $action = "edit";
        if($image=='default'){
        $sql = "UPDATE gallery SET name = '$name' WHERE id = $id";
        }else{
            $sql = "UPDATE gallery SET name = '$name', image = '$image' WHERE id = $id";
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