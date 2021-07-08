<?php
$host       = "<endpoint>";
$username   = "<username>";
$password   = "<password>";
$dsn        = "mysql:host=$host;dbname=courses";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$connection = mysqli_connect($host, $username, $password, $dsn);
if (mysqli_connect_errno()) {
    die("database connection failed :" .
        mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")");
}
