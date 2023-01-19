<?php

$data = array();
$req = $_REQUEST['req'];
if (isset($_GET['req'])) {
    require '../dbconnAdm.php';
    if ($req == 'rows') {
        $result = $conn->query("SELECT a.id, a.title, a.datepublished, a.content, a.authors_id, a.image, b.name FROM news a
                                LEFT JOIN authors b ON b.id = a.authors_id
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == "author") {
        $result = $conn->query("SELECT * FROM authors");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'allData') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM news WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'tulus') {
        $result = $conn->query("SELECT * FROM tulus
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'andmesh') {
        $result = $conn->query("SELECT * FROM andmesh
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'justin') {
        $result = $conn->query("SELECT * FROM justin
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'fiersa') {
        $result = $conn->query("SELECT * FROM fiersa
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'lewis') {
        $result = $conn->query("SELECT * FROM lewis
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'ariana') {
        $result = $conn->query("SELECT * FROM ariana
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'dean') {
        $result = $conn->query("SELECT * FROM dean
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'jason') {
        $result = $conn->query("SELECT * FROM jason
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'gallery') {
        $result = $conn->query("SELECT * FROM gallery
                               ");

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == 'galleryRow') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM gallery WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    if ($req == "contact_us") {
        $result = $conn->query("SELECT * FROM contact_us");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo json_encode($data);
}