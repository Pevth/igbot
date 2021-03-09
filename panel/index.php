<!doctype html>

<?php
//include auth_session.php file on all user panel pages
include("login/auth_session.php");
?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c276789111.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body>

  <div class="vertical-nav color-sidebar" id="sidebar">
    <div class="logo-place">
      <h4 class="m-0 animate__animated animate__fadeIn animate__slower">I G B O T</h4>
    </div>
    <p class="font-weight-bold text-uppercase px-3 small pb-3 mt-4 text-center">Ogólne</p>
    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar text-active">
          <i class="fa fa-line-chart me-2 fa-fw"></i>
          Statystyki
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
          <i class="fa fa-address-card me-2 fa-fw"></i>
          Konfiguracja programu
          </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
          <i class="fab fa-instagram me-2 fa-fw"></i>
                  Konto instagram
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
                  <i class="fa fa-picture-o mr-3 fa-fw"></i>
                  Zakładka 4
              </a>
      </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0 text-center">Pomoc</p>

    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
                  <i class="fa fa-area-chart mr-3 fa-fw"></i>
                  Zakładka 1
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
                  <i class="fa fa-bar-chart mr-3 fa-fw"></i>
                  Zakładka 2
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
                  <i class="fa fa-pie-chart mr-3 fa-fw"></i>
                  Zakładka 3
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-sidebar">
                  <i class="fa fa-line-chart mr-3 fa-fw"></i>
                  Zakładka 4
              </a>
      </li>
    </ul>
    <div class ="information"> [nazwa firmy] Copyright </div>
  </div>
  <!-- End vertical navbar -->
  <!-- Page content holder -->
  <div class="page-content" id="content">

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light nav-config">
  <div class="container-fluid">
    <img src="image/menu_btn.png" weight=42px  height=42px id="sidebarCollapse"/>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 px-5 mb-lg-0">
        <li class="nav-item dropdown px-5">

          <a class=" account dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Ustawienia konta</a></li>
            <li><a class="dropdown-item" href="#">Pomoc</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="login/logout.php">Wyloguj sie</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid d-flex p-5" id="content">

  <div class="row g-3">
    <div class="col-1 py-3 px-5">
      <img src="image/logo.jpg" width="45" height="45"/>
    </div>
    <div class="col-9">
      <div class="p-0 py-1 text-light mb-5">
        <span class = "head_p">Witaj <?php echo $_SESSION['username']; ?>!</span>
        <br>
        <span class = "underhead_p">Rozpocznij promowanie instagrama w programie IGBOT</span>
      </div>
    </div>
    <div class="col-2 mb-0 py-3">
      <p class = "underhead_p">Nazwa programu: IGBOT - Arct comp.</p>
      <p class = "underhead_p">ostatnia aktualizacja: 10.08</p>
      <p class = "underhead_p">wersja: beta 1.1</p>
    </div>




    <div class="col-xxl-2 col-sm-6">
      <div class="p-4 box_1 text-center">
        <span class="upper_letter">Przyrost dzienny</span>
        <hr class="my-3">
        <span class="big_letter">120 </span><sup>obserwujących</sup>

      </div>
    </div>
    <div class="col-xxl-2 col-sm-6">
      <div class="p-4 box_2 text-center">
        <span class="upper_letter">Przyrost tygodniowy</span>
        <hr class="my-3">
        <span class="big_letter">576 </span><sup>obserwujących</sup>
      </div>

    </div>
    <div class="col-xxl-2 text-center col-sm-6">
      <div class="p-4 box_3">
        <span class="upper_letter">Współczynnik przyrostu</span>
        <hr class="my-3">
      <span class="big_letter">0,14   </span><sup>na obserwowanego</sup>
    </div>
    </div>
    <div class="col-xxl-2 text-center col-sm-6">
      <div class="p-4 box_4">
        <span class="upper_letter">Statystyki ogólne</span>
        <hr class="my-3">
        <span class="big_letter">2312 </span><sup>obserwujących</sup>
      </div>
    </div>
    <div class="col-xxl-4">
      <div class="p-4 box_5"><span class="upper_letter">Dane ogólne</span>
      <hr class="my-3">
      <div class="box_letter">
        <span>Nazwa konta: @redd_py</span>
        <br>
        <span>Dołączono: 17.09.2021</span>
        <br>
      </div>
    </div>
    </div>

    <div class="col-4">
      <div class="p-4 box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas ante sapien, vel luctus turpis hendrerit id. Proin at nisl sit amet nulla bibendum dictum sit amet at diam. Integer feugiat, sem et hendrerit hendrerit, lacus ex scelerisque tortor, in suscipit justo urna sed lacus. Nunc vitae dui quis mi consequat consequat quis a diam. Phasellus mollis odio ut tincidunt facilisis. Etiam ac interdum enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec est purus, lacinia a eros eu, placerat volutpat neque. Pellentesque tristique pharetra purus.

Quisque et sodales dolor, sed malesuada tellus. Ut vitae ultrices sem. Pellentesque commodo sed magna eget semper. Donec ultrices dictum leo at imperdiet. Mauris tristique augue diam, eu blandit nibh pellentesque vitae. Fusce facilisis libero ut erat pharetra, congue malesuada sem mattis. Fusce blandit ex vel cursus faucibus. In laoreet eu purus in suscipit. Curabitur viverra orci vitae orci mollis auctor.</div>
    </div>

    <div class="col-8">
      <div class="p-4 box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas ante sapien, vel luctus turpis hendrerit id. Proin at nisl sit amet nulla bibendum dictum sit amet at diam. Integer feugiat, sem et hendrerit hendrerit, lacus ex scelerisque tortor, in suscipit justo urna sed lacus. Nunc vitae dui quis mi consequat consequat quis a diam. Phasellus mollis odio ut tincidunt facilisis. Etiam ac interdum enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec est purus, lacinia a eros eu, placerat volutpat neque. Pellentesque tristique pharetra purus.

Quisque et sodales dolor, sed malesuada tellus. Ut vitae ultrices sem. Pellentesque commodo sed magna eget semper. Donec ultrices dictum leo at imperdiet. Mauris tristique augue diam, eu blandit nibh pellentesque vitae. Fusce facilisis libero ut erat pharetra, congue malesuada sem mattis. Fusce blandit ex vel cursus faucibus. In laoreet eu purus in suscipit. Curabitur viverra orci vitae orci mollis auctor.</div>
    </div>
    <div class="col-6">
      <div class="p-3 box">Lorem ipsum</div>
    </div>
    <div class="col-6">
      <div class="p-3 box">Lorem ipsum</div>
    </div>
</div>

</div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
