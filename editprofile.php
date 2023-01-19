<?php
    session_start();
    include('dbconn.php');
    $userId = $_SESSION['userid'];
    $selectUser = $conn->query("SELECT * FROM users WHERE id = '$userId'")->fetch_assoc();
    $userProfile = $selectUser['name'];
    $userEmail = $selectUser['email'];
    $userGender = $selectUser['gender'];
    $userBirth = $selectUser['date_of_birth'];
?>

<!DOCTYPE html>
<html translate="no">
    <head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="JavaScript/editProfile.js"></script>
        <title>Edit Profile | Music Go</title>
        <style>
          #formEditProfile{
            background-image: linear-gradient(to right, #141414,#4b4b4b,#141414);
            padding: 8% 0 5% 0;
            color: white;
          }
          #profile-image{
            margin: 2% 0 1% 0;
            width: 20%;
            border-radius: 100%;
          }
        </style>
    </head>
    <body>
        <?php include('navigation.php') ?>
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data" id="formEditProfile">
            <div class="container">
                <input type="hidden" name="id">
                <div class="mb-3">
                    <label class="col-form-label">Name:</label>
                    <input type="text" value="<?=$userProfile?>" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Email:</label>
                    <input type="text" value="<?=$userEmail?>" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Gender:</label>
                    <input type="text" value="<?=$userGender?>" class="form-control" id="gender" name="gender" required>
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Date of Birth:</label>
                    <input type="text" value="<?=$userBirth?>" class="form-control" id="date" name="date" required>
                </div>
                <div class="modal-footer">
                    <button id="btnCloseProfile" type="button" class="btn btn-danger">Back</button>
                    <button id="btnSaveProfile" type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </body>
</html>