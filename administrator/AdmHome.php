<?php 
session_start();
include ('dbconnAdm.php');
include ('AdmNavbar.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AdmHome.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="JavaScript/LogAdmin.js"></script>
<title>MusicGo</title>

</head>
<body>


<div class="hero-image">
  <div class="hero-text">
  </div>
</div>

<?php include ('AdmFooter.php')
?>

</body>

</html>