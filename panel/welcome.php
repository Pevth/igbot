<!doctype html>

<?php
//include auth_session.php file on all user panel pages
include("login/auth_session.php");
$name = $_SESSION['username'];
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>I G B O T</title>

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
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
</head>
<body>

  <?php
    require('database/db_web.php');
    $query  = 'SELECT `version`, `date` FROM config ORDER BY ID DESC LIMIT 1';
    $result_ver = mysqli_query($con_web, $query);
    $row_ver = mysqli_fetch_assoc($result_ver);

    require('database/db_python.php');
    $query  = 'SELECT `user_ig`, `follow_today`, `follow_week` ,`date` , `f_count`, `follow` FROM info ORDER BY ID DESC LIMIT 1';
    $result_stats = mysqli_query($con_py, $query);
    $row_stats = mysqli_fetch_assoc($result_stats);
  ?>


  <div class="vertical-nav color-sidebar animate__animated animate__fadeInLeft animate__slows" id="sidebar">
    <a href="index.php"><div class="logo-place">
      <h4 class="m-0 animate__animated animate__fadeIn animate__slower">I G B O T</h4>
    </div></a>
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
    <div class ="information " style="color: #848c94;"> IGBOT - Copyright ©</div>
  </div>
  <!-- End vertical navbar -->
  <!-- Page content holder -->
  <div class="page-content" id="content">

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light nav-config animate__animated animate__fadeInDown animate__slows animate__delay-1s">
  <div class="container-fluid">
    <img src="image/menu_btn.png" onclick="setTimeout('showGraph()', 300);" weight=42px  height=42px id="sidebarCollapse"/>
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
    <div class="col-xl-8 col-lg-5 col-12">
      <div class="p-0 py-1 text-light mb-5 mb-sm-0">
        <span class = "head_p animate__animated animate__fadeIn animate__delay-2s">Witaj <?php echo $name; ?>!</span>
        <br>
        <span class = "underhead_p animate__animated animate__fadeIn animate__delay-3s">Rozpocznij promowanie instagrama w programie IGBOT</span>
      </div>
    </div>

    <div class="col-xl-4 col-lg-7 col-md-7 mb-0 py-3 animate__animated animate__fadeIn animate__delay-2s zuwaczka">
      <p class = "underhead_p">ostatnia aktualizacja: <?php echo $row_ver["date"]; ?></p>
      <p class = "underhead_p">Nazwa: IGBOT - Arct comp.</p>
      <p class = "underhead_p">wersja: <?php echo $row_ver["version"]; ?></p>
    </div>

    <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-12">
      <div class="p-4 box_1 text-center  animate__animated animate__fadeIn animate__delay-5s">
        <span class="upper_letter">Przyrost dzienny</span>
        <hr class="my-3">
        <span class="big_letter text-center-box"><?php echo $row_stats["follow_today"]; ?> </span><sup> obserwujących</sup>

      </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-12">
      <div class="p-4 box_2 text-center  animate__animated animate__fadeIn animate__delay-5s">
        <span class="upper_letter">Przyrost tygodniowy</span>
        <hr class="my-3">
        <span class="big_letter text-center-box"><?php echo $row_stats["follow_week"]; ?> </span><sup> obserwujących</sup>
      </div>

    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-12">
      <div class="p-4 box_3 text-center animate__animated animate__fadeIn animate__delay-5s">
        <span class="upper_letter">Współczynnik</span>
        <hr class="my-3">
      <span class="big_letter text-center-box"><?php echo round(($row_stats["follow_today"]/$row_stats["f_count"]), 2); ?>  </span><sup> na obserwowanego</sup>
    </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-12">
      <div class="p-4 box_4 text-center animate__animated animate__fadeIn animate__delay-5s">
        <span class="upper_letter">Statystyki ogólne</span>
        <hr class="my-3">
        <span class="big_letter text-center-box"><?php echo $row_stats["follow"]; ?> </span><sup> obserwujących</sup>
      </div>
    </div>
    <div class="col-xxl-4 animate__animated animate__fadeIn animate__delay-5s">
      <div class="p-4 box_5"><span class="upper_letter">Dane ogólne</span>
      <hr class="my-3">
      <div class="box_letter">
        <span>Nazwa konta: @<?php echo $row_stats["user_ig"]; ?></span>
        <br>
        <span>Dołączono: <?php echo $row_stats["date"]; ?></span>
        <br>
      </div>
    </div>
    </div>

    <?php
      $con_py -> close();
    ?>

    <div class="col-lg-4 col-xl-3 col-12 animate__animated animate__fadeIn animate__delay-5s">
      <div class="p-4 box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas ante sapien, vel luctus turpis hendrerit id. Proin at nisl sit amet nulla bibendum dictum sit amet at diam. Integer feugiat, sem et hendrerit hendrerit, lacus ex scelerisque tortor, in suscipit justo urna sed lacus. Nunc vitae dui quis mi consequat consequat quis a diam. Phasellus mollis odio ut tincidunt facilisis. Etiam ac interdum enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec est purus, lacinia a eros eu, placerat volutpat neque. Pellentesque tristique pharetra purus.

      </div>
    </div>

    <div class="col-lg-8 col-xl-9 col-12 animate__animated animate__fadeIn animate__delay-5s">
      <div class="p-4 box text-center">
        <span class="upper_letter">Wykres wzrostu obserwujących - [ 7 dni ] </span>
        <hr class="my-3">
        <canvas id="chart_follow_week" class="col-12" height="300"></canvas>

        <script  type="text/javascript">


        var ctx = document.getElementById('chart_follow_week').getContext("2d");
        var gradient = ctx.createLinearGradient(500, 0, 100, 300);
				gradient.addColorStop(0, "rgba(225,78,203,1)");
				gradient.addColorStop(1, "rgba(181, 66, 239,1)");

        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var date = [];
                    var follow = [];

                    for (var i in data) {
                        date.push(data[i].date);
                        follow.push(data[i].follow);
                    }


                    var chartdata = {
                        labels: date,
                        datasets: [
                            {
                                label: 'ilość obserwujących',
                                borderColor: gradient,
                                data: follow,
                            }
                        ]
                    };

                    var graphTarget = $("#chart_follow_week");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,
                    });
                });
            }
        }
        </script>
      </div>
    </div>
    <div class="col-12 animate__animated animate__fadeIn animate__delay-5s">
      <div class="box_6">
        <table class="table table-borderless">
          <thead class="table-dark">
            <tr>
             <th scope="col">Data</th>
             <th scope="col">Typ</th>
             <th scope="col">Opis</th>
           </tr>
          </thead>
          <tbody class="log-table">
          <?php include 'config/log.php';?>
          </tbody>
        </table>
    </div>

</div>

</div>
</div>


  <script>
  $( window ).resize(function() {
  window.location.reload();
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


</body>
</html>
