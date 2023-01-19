<?php 
session_start();
include ('dbconn.php');
include ('navigation.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="CSSstyle/galery.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>MusicGo</title>
    </head>

    <body>

    <div class="container">
  <div class="card card0">
    <div class="border">
      <h2>Tulus</h2>
    </div>
  </div>
  <div class="card card1">
    <div class="border">
      <h2>Lewis Capaldi</h2>
    </div>
  </div>
  <div class="card card2">
    <div class="border">
      <h2>Andmesh Kamelang</h2>
    </div>
  </div>
</div>

        <section class="home">
        </section>

    </body>
<?php include ('footer.php')?>
</html>