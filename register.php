<link rel="stylesheet" href="CSSstyle/register.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="JavaScript/register.js"></script>
<?php
require 'dbconn.php'; 

?>
<body>
	<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Registrasi</h1>
    <p id="description" class="description text-center">
  
    </p>
  </header>
  <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" id="register-form">
    <div class="form-group">
      <label id="name-label" for="name">Nama</label>
      <input
        type="text"
        name="name"
        id="name"
        class="form-control"
        placeholder="Masukkan Nama Anda"
        required
      />
    </div>
    <div class="form-group">
      <label id="email-label" for="email">Email</label>
      <input
        type="email"
        name="email"
        id="email"
        class="form-control"
        placeholder="Masukkan Email Anda"
        required
      />
    </div>
    <div class="form-group">
      <label id="password-label" for="password">Password</label>
      <input
        type="password"
        name="password"
        id="Password"
        class="form-control"
        placeholder="Masukkan Password Anda"
        required
      />
    </div>

    <div class="form-group">
      <label id="date-label" for="date">Date Of Birth</label>
      <input
        type="date"
        name="date"
        id="date"
        class="form-control"
        required
      />
    </div> 

    <div class="form-group">
      <p>GENDER</p>
      <label>
        <input
          name="gender"
          value="Laki-Laki"
          type="radio"
          class="input-radio"
          checked
        />Laki-Laki</label
      >
      <label>
      <label>
        <input
          name="gender"
          value="Perempuan"
          type="radio"
          class="input-radio"
          checked
        />Perempuan</label
      >
      <label>
       
</div>

    <div class="form-group">
      <button type="button" id="submit" class="submit-button">
       KIRIM
      </button>
    </div>
  </form>
</div>

</body>