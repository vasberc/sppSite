<?php


$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = "vashsyndesmos";

$dbConnected = mysqli_connect($hostname, $username, $password, $databaseName);


if ($dbConnected->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dbConnected->connect_errno . ") " . $dbConnected->connect_error;
}
echo $dbConnected->host_info . "\n";


?>
