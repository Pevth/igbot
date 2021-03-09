<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","python_db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
    }
?>
