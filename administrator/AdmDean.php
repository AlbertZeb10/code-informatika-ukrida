<?php
    session_start();
    include('dbconnAdm.php');
?>

<!DOCTYPE html>
<html translate="no">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="JavaScriptAdm/AdmDean.js"></script>
        <title>MusicGo</title>
    </head>
    <body class="bg-secondary">
        <?php include('admNavbar.php') ?>
        <div class="container">
            <h3 class="text-center mt-3">List Music Dean Lewis</h3>
            <!-- Button trigger modal -->
            <button id="btnNew" type="button" class="btn btn-primary" data-bs-toogle="modal">
                Add Dean Lewis
            </button>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name Artist</th>
                        <th scope="col">Name Music</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody id="dean">
                </tbody>
            </table>
        </div>

        <!-- Modal Add -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Add Dean Lewis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data" id="formAdd">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label class="col-form-label">Name Artist:</label>
                                <input type="text" value="" class="form-control" id="title" name="name_artist" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Name Music:</label>
                                <input type="text" value="" class="form-control" id="content" name="name_music" required>
                            </div>
                            
                            <div class="modal-footer">
                                <button id="btnClose" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button id="btnSave" type="button" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>