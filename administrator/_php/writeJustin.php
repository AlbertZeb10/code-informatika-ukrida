<?php
require '../dbconnAdm.php';

if (isset($_POST['req'])) {
    $req = $_POST['req'];
    $id = $_POST['id'];
    if ($req == 'delete') {
        $action = 'delete';
        $sql = "DELETE FROM justin WHERE id= $id ";
    }
} else {
    $id = $_POST['id'];
    $name_artist = $_POST['name_artist'];
    $name_music = $_POST['name_music'];
        }
    if ($id == "" || $id == null) {
        $action = "insert";
        if($image=='default'){
            $sql =  "INSERT INTO justin (name_artist,name_music)
					VALUES('$name_artist','$name_music')";
        }else {
            $sql =  "INSERT INTO justin (name_artist,name_music)
					VALUES('$name_artist','$name_music')";
        }
        
    } else {
        $action = "edit";
        if($image=='default'){
        $sql = "UPDATE justin SET name_artist = '$name_artist', name_music = '$name_music' WHERE id = $id";
        }else{
            $sql = "UPDATE justin SET name_artist = '$name_artist', name_music = '$name_music' WHERE id = $id";
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
