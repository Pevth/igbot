<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con_web = mysqli_connect("localhost","root","","website_db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
    }
?>
