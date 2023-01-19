<link rel="stylesheet" href="LogAdmin.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="LogAdmin.js"></script>
<?php
require 'dbconnAdm.php'; 

?>
<body>
	<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">LOGIN ADMIN</h1>
    <p id="description" class="description text-center">
  
    </p>
  </header>
  <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" id="admlogin-form">
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
      <button type="button" id="submit" class="submit-button">
       SUBMIT
      </button>