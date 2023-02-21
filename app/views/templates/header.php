<?php 
  

  if(!isset($_SESSION['login'])){

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">

    <!-- My Css -->
    <style>
      section{
        min-height: 420px;
      }
    </style>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/539ff654ff.js" crossorigin="anonymous"></script>

    <title>Kitchen Set Shop</title>
  </head>
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow p-2 mb-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="text-primary font-weight-bold navbar-brand" href="<?= BASEURL;?>/home/">Kitchen Set Shop</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= BASEURL;?>/home/kategori/1">Cangkir Kopin</a>
                <a class="dropdown-item" href="<?= BASEURL;?>/home/kategori/2">Mangkok Kopin</a>
                <a class="dropdown-item" href="<?= BASEURL;?>/home/kategori/2">Gelas</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL;?>/home/login">Daftar/Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php }else{?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">

    <!-- My Css -->
    <style>
      section{
        min-height: 420px;
      }
    </style>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/539ff654ff.js" crossorigin="anonymous"></script>

    <title>Kitchen Set Shop</title>
  </head>
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow p-2 mb-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="text-primary font-weight-bold navbar-brand" href="<?= BASEURL;?>/home/">Kitchen Set Shop</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= BASEURL;?>/home/kategori/1">Cangkir Kopin</a>
                <a class="dropdown-item" href="<?= BASEURL;?>/home/kategori/2">Mangkok Kopin</a>
                <a class="dropdown-item" href="<?= BASEURL;?>/home/kategori/7">Gelas</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION['username']?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profil</a>
                <a class="dropdown-item" href="<?= BASEURL;?>/home/logout">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php }?>