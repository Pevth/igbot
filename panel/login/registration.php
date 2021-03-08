<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
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
    require('../db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='alert alert-success' role='alert'> Pomyślnie zarejestrowano! <a href='login.php' class='alert-link'>Możesz już się zalogować</a> oraz przejśc do panelu. </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
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

        <div class="form-floating mb-3 col-9 mx-auto">
          <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required="required">
          <label for="floatingPassword">Hasło</label>
        </div>

        <div class="form-floating col-9 mx-auto">
          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email Adress" required="required">
          <label for="floatingPassword">E-mail</label>
        </div>

      </br></br>
        <div class="center">
        <button class="btn button-control" value="Login">Zarejestruj</button>
        </div>
      </div>
    </form>
    <div class="animate__animated animate__fadeIn animate__delay-2s animate__slower">
    <span class="under py-4"><center>Masz już konto?</center></span>
    </div>
    <div class="center">
    <button class="btn button-control_2 mt-2 animate__animated animate__fadeIn animate__delay-3s animate__slower" onclick="window.location.href='/panel/login/login.php'">Zaloguj się</button>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>
