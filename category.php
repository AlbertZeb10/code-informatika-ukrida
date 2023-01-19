<?php 
session_start();
include ('dbconn.php');
include ('navigation.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="CSSstyle/category.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JavaScript/profile.js"></script>
    <title>MusicGo</title>
    </head>

    <body>

<div class="row mt-5">
  <div id="tulus" class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Tulus</h5>
      <p class="card-text">Album ini berisikan tentang beberapa list lagu dari Artist yang bernama Tulus.</p>
      <a href="cMusic/tulus.php" class="card-link">Lihat Selengkapnya</a>
    </div>
  </div> 

  <div id="AndmeshKamelang" class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Andmesh Kamelang</h5>
      <p class="card-text">Album ini berisikan tentang beberapa list lagu dari Artist yang bernama Andmesh Kamelang.</p>
      <a href="cMusic/andmesh.php" class="card-link">Lihat Selengkapnya</a>
    </div>
  </div>

<div id="JustinBieber" class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Justin Bieber</h5>
      <p class="card-text">Album ini berisikan tentang beberapa list lagu dari Artist yang bernama Justin Bieber.</p>
      <a href="cMusic/justin.php" class="card-link">Lihat Selengkapnya</a>
    </div>
  </div>
</div>

        <section class="home">
        </section>

    </body>
<?php include ('footer.php')?>
</html>