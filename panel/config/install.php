<?php
session_start();

$name = $_SESSION['register'];
$con = mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno()){
    echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
}

$query = "CREATE DATABASE IF NOT EXISTS $name DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;";
mysqli_query($con, $query);

$con = mysqli_connect("localhost","root","",$name);
// Check connection
if (mysqli_connect_errno()){
    echo "Błąd połączenia z MySQL: " . mysqli_connect_error();
}

$createQueries = ["CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `user_web` varchar(50) NOT NULL,
  `user_ig` varchar(50) NOT NULL,
  `pass_ig` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

"CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `user_ig` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `follow` int(11) NOT NULL,
  `follow_today` int(11) NOT NULL,
  `follow_week` int(11) NOT NULL,
  `f_count` int(11) NOT NULL,
  `l_count` int(11) NOT NULL,
  `c_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

"CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_ig` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

"CREATE TABLE `unfollow` (
  `id` int(11) NOT NULL,
  `user_ig` varchar(50) NOT NULL,
  `f_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

"CREATE TABLE `banlist` (
  `id` int(11) NOT NULL,
  `user_ig` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",

"ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);",

"ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);",

"ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);",

"ALTER TABLE `unfollow`
  ADD PRIMARY KEY (`id`);",

"ALTER TABLE `banlist`
  ADD PRIMARY KEY (`id`);,"

"ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;",

"ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;",

"ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;",

"ALTER TABLE `unfollow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;",

"ALTER TABLE `banlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;"];


foreach($createQueries as $createQuery)
  {
    $status = $con->query($createQuery);
    if(!$status) die('Coś poszło nie tak');
  }


if(session_destroy()) {
    header("Location: ../login/login.php");
}
?>
