<?php
header('Content-Type: application/json');
session_start();
require('database/db_python.php');

$query = "SELECT `follow`, `date` FROM info ORDER BY ID DESC LIMIT 7";

$result = mysqli_query($con_py,$query);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

$data_rev = array_reverse($data);

mysqli_close($con_py);

echo json_encode($data_rev);
?>
