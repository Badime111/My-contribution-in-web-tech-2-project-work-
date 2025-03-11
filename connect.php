<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="driveaway_db";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Connect to MySQL database
try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
} catch (MySQLi_Sql_Exception $ex) {
    echo("Error in connecting");
}




?>