<?php

$hostname = '172.20.10.2';
$user = 'etseban';
$password = 'yocmoi';
$database = 'kali_db';

$mysqli = mysqli_init();
$mysqliConnected = mysqli_real_connect($mysqli, $hostname, $user, $password, $database, NULL, NULL, MYSQLI_CLIENT_SSL);
if (!$mysqliConnected){
    die("Connect Error: ".mysqli_connect_error($mysqli));
}

echo 'Sucess...' . mysqli_get_host_info($mysqli) . "\n";

mysqli_close($mysqli);
?>