<?php
require '../../dbconn.php';
if (isset($_POST['req'])) {
    $req = $_POST['req'];
    $id = $_POST['id'];
    if ($req == 'delete') {
        $action = 'delete';
        $sql = "DELETE FROM news WHERE id= $id ";
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