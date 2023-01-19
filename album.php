<?php 
session_start();
include ('dbconn.php');
include ('navigation.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="CSSstyle/album.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JavaScript/profile.js"></script>
    <title>MusicGo</title>
    </head>

    <body>

<div class="row mt-5">
  <div id="FieraBesari" class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Fiersa Besari</h5>
      <p class="card-text">Album ini berisikan tentang beberapa list lagu dari Artist yang bernama Fiersa Besari.</p>
      <a href="cAlbum/fiersa.php" class="card-link">Lihat Selengkapnya</a>
    </div>
  </div> 

  <div id="LewisCapaldi" class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Lewis Capaldi</h5>
      <p class="card-text">Album ini berisikan tentang beberapa list lagu dari Artist yang bernama Lewis Capaldi.</p>
      <a href="cAlbum/lewis.php" class="card-link">Lihat Selengkapnya</a>
    </div>
  </div>

<div id="ArianaGrande" class="card col-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Ariana Grande</h5>
      <p class="card-text">Album ini berisikan tentang beberapa list lagu dari Artist yang bernama Ariana Grande.</p>
      <a href="cAlbum/ariana.php" class="card-link">Lihat Selengkapnya</a>
    </div>
  </div>
</div>

        <section class="home">
        </section>

    </body>
<?php include ('footer.php')?>
</html>