<?php 
session_start();
include ('dbconn.php');
include ('navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSSstyle/home.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="JavaScript/profile.js"></script>
<title>MusicGo</title>

</head>
<body>


<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Music</h1>
    <h3>Listening Music</h3>
  </div>
</div>

<!-- Awal Carousel -->
<div class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

      </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/c01.jpg" class="d-block img-fluid" alt="Gambar 1">
          </div>
          <div class="carousel-item">
            <img src="images/c02.jpg" class="d-block img-fluid" alt="Gambar 2">
          </div>
          <div class="carousel-item">
            <img src="images/c03.jpg" class="d-block img-fluid" alt="Gambar 3">
          </div>
          <div class="carousel-item">
            <img src="images/c04.jpg" class="d-block img-fluid" alt="Gambar 4">
          </div>
          <div class="carousel-item">
            <img src="images/c05.jpg" class="d-block img-fluid" alt="Gambar 5">
          </div>
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    <!-- Akhir Carousel -->
   
<?php include ('footer.php')
?>

</body>

</html>