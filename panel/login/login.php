<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
</head>
<body>
<?php
  $test = "<div class='alert alert-danger' role='alert'> Podano złe dane! <a href='login.php' class='alert-link'>zaloguj się jeszcze raz</a> i przejdź do panelu. </div>";
    require('../db.php');
    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;

            header("Location: ../index.php");
        } else {
            echo $test;
        }
      }
?>
<div class="wrapper">
<form class="form-signin animate__animated animate__fadeIn animate__slow" method="post">
  <div class="up_panel shadow-sm">
    <p class="form-signin-heading text-center">I G B O T</p>
  </div>
  <br>
  <div ="down_panel">
    <div class="form-floating mb-3 col-9 mx-auto">
      <input type="text" class="form-control" id="floatingInput" name="username" placeholder="example" required="required">
      <label for="floatingInput">Nazwa użytkownika</label>
    </div>
    <div class="form-floating col-9 mx-auto">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Hasło</label>
    </div></br></br>
    <div class="center">
    <button class="btn button-control" value="Login">Zaloguj</button>
    </div>
  </div>
</form>
<div class="animate__animated animate__fadeIn animate__delay-2s animate__slower">
<span class="under py-4"><center>Nie masz jeszcze konta?</center></span>
</div>
<div class="center">
<button class="btn button-control_2 mt-2 animate__animated animate__fadeIn animate__delay-3s animate__slower" onclick="window.location.href='/panel/login/registration.php'">Zarejestruj się</button>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>
