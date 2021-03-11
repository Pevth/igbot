<?php

$con = mysqli_connect("localhost","root","","peev");

if (mysqli_connect_errno()){
    echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
}

$date = date("Y-m-d");
$data = array();

$query = "SELECT `date`, `type`, `content` FROM `log` WHERE `date` = '".$date."' ORDER BY ID ASC LIMIT 15";
$result = mysqli_query($con,$query);

$logs = array();
foreach ($result as $row) {
  $logs[] = $row;
}

$c_logs = count($logs);

echo "<pre>".var_dump($logs)."</pre>";

?>
