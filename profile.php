<?php
    session_start();
    include('dbconn.php');
    $userId = $_SESSION['userid'];
    $selectUser = $conn->query("SELECT * FROM users WHERE id = $userId")->fetch_assoc();
?>

<!DOCTYPE html>
<html translate="no">
    <head>

        <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="JavaScript/profile.js"></script>
        <title>Profile | Music Go</title>
        <style>
          #profileContent{
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
        <div style="min-height:100vh" id="profileContent">
            <h1 class="text-center m-0 px-2 flex-grow-1">Profile</h1>

            <div class="d-flex flex-column align-items-center text-center p-2">
                <?php
                    $userProfile = $selectUser['name'];
                    $userEmail = $selectUser['email'];
                    $dateJoin = $selectUser['datetime'];
                    $userGender = $selectUser['gender'];
                    $userBirth = $selectUser['date_of_birth'];
                    echo '<h2>'.$userProfile.'</h2>';
                    echo '<p class="mb-4">Date joined: '.$dateJoin.'</p>';
                    echo '<p class="mb-4">Date of birth: '.$userBirth.'</p>';
                ?>
            </div>

            <div class="d-flex justify-content-center flex-wrap">
                <span class="d-flex align-items-center p-2"><button id="btnEditProf" class="btn btn-primary">Edit Profile</button></span>
                <span class="d-flex align-items-center p-2"><button id="btnChgPass" class="btn btn-success">Change Password</button></span>
                <span class="d-flex align-items-center p-2"><button id="btnLogout" class="btn btn-danger">Log Out</button></span>
            </div>
        </div>

        <!-- Modal Change Password -->
        <div class="modal fade" id="modalChgPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data" id="formChgPass">
                            <input type="hidden" name="id">
                            <div id="boxCurrentPass" class="mb-3">
                                <label class="col-form-label">Current Password:</label>
                                <input type="password" value="" class="form-control" id="currentPass" name="currentPass" required>
                            </div>
                            <div id="boxChangePass" class="mb-3 d-none">
                                <label class="col-form-label">New Password:</label>
                                <input type="password" value="" class="form-control" id="changePass" name="changePass" required>
                            </div>
                            <div id="boxConfirmPass" class="mb-3 d-none">
                                <label class="col-form-label">Confirm Password:</label>
                                <input type="password" value="" class="form-control" id="confirmPass" name="confirmPass" required>
                            </div>
                            <span id="checkPass"></span>
                        </form>
                        <div class="modal-footer">
                            <button id="btnCloseChgPass" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="btnSaveChgPass" type="button" class="btn btn-primary">Next</button>
                            <button id="btnSaveNewPass" type="button" class="btn btn-primary d-none">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>