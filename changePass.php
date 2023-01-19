<?php session_start();?>
<html>
    <head>
        <title>MusicGo Change Pass</title>
    </head>
    <body>
        <?php include_once('dbconn.php');
        
        if(isset($_POST['Submit'])){
            
            $email = $_POST['useremail'];
            $opwd = $_POST['opwd'];
            $npwd = $_POST['npwd'];
            $cpwd = $_POST['cpwd'];

            $query = mysqli_query($conn, "SELECT email,password from users where email = '$email' AND password = '$opwd'");
         $num = mysqli_fetch_array($query);
         
         if($num>0){
            
            $conn = mysqli_query($conn,"UPDATE users set password ='$npwd' where email = '$email'");
            $_SESSION['msg1'] = "Password Change Successfully";
        }else{
           $_SESSION['msg1'] = "Password Does Not Match";
        }
            
}







        ?>
        <p style="color: red;"><?php echo$_SESSION['msg1'];?><?php $_SESSION['msg1'] =""; ?></p>
        <form name="chngpwd" action="" method="post" onSubmit="return valid();">
        <table align="center">
            <tr height="50">
                <td>EMAIL ID:</td>
                <td><input type="text" name="useremail" id="useremail"></td>
            </tr>
            <tr height="50">
                <td>Old Password :</td>
                <td><input type="password" name="opwd" id="opwd"></td>
            </tr>
            <tr height="50">
                <td>New Password :</td>
                <td><input type="password" name="npwd" id="npwd"></td>
            </tr>
            <tr height="50">
                <td>Confirm Password :</td>
                <td><input type="password" name="cpwd" id="cpwd"></td>
            </tr>
            <tr>
                <td><a href="index.php">Back To Index Page</a></td>
                <td><input type="submit" name="Submit" value="Change Password" /></td>
            </tr>
        </table>
        </form>
    </body>
</html>