<?php
$dbHost = "localhost";
$dbPort = "5434";
$dbName = "nourishmate";
$dbUser = "postgres";
$dbPassword = "postgresql";

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName;user=$dbUser;password=$dbPassword");
session_start();
?>
