<?php
// Database connection parameters
$host = 'nourishmate.postgres.database.azure.com';
$database = 'nourishmate';
$port='5432';
$user = 'nourishmate';
$password = 'Anna@2023';

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}


?>
