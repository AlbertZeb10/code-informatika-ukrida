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
        <script src="JavaScriptAdm/newsAdm.js"></script>
        <title>MusicGo</title>
    </head>
    <body class="bg-secondary">
        <?php include('admNavbar.php') ?>
        <div class="container">
            <h3 class="text-center mt-3">List News</h3>
            <!-- Button trigger modal -->
            <button id="btnNew" type="button" class="btn btn-primary" data-bs-toogle="modal">
                Add News
            </button>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date Published</th>
                        <th scope="col">Content</th>
                        <th scope="col">Author</th>
                        <th scope="col">Image</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody id="news">
                </tbody>
            </table>
        </div>

        <!-- Modal Add -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Add News</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data" id="formAdd">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label class="col-form-label">Title:</label>
                                <input type="text" value="" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Content:</label>
                                <input type="text" value="" class="form-control" id="content" name="content" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Author:</label>
                                <select class="form-select" id="author" name="author">
                                </select>
                            </div>
                            <div class="mb-3"> 
                                <label for="image">Image:</label>
                                <input type="file" class="form-control mt-2" id="image" name="image">
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