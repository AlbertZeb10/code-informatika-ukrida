<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">MUSIC GO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="category.php">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="about music.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Music
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="album.php">Album</a></li>
            <li><a class="dropdown-item" href="artist.php">Artist</a></li>
            <li><a class="dropdown-item" href="galery.php">Galery</a></li>
            <li><a class="dropdown-item" href="news.php">News</a></li>
          </ul>
        </li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
      <?php
        if(isset($_SESSION['userid'])){

        $userid=$_SESSION['userid'];
        $user=$conn->query("SELECT * FROM users WHERE id='$userid'")->fetch_assoc();
        $username=$user['name'];
        echo'<div class="dropdown text-end">
        <a class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">'
          .$username.
        '</a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          <li><a class="dropdown-item" href="login.php">Change Account</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" id="btn-signout">Sign Out</a></li>
        </ul>
      </div>';
    }
      ?> 

    </div>
  </div>
</nav>