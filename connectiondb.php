<?php
// Database connection parameters
$host = 'localhost';
$database = 'nourishmate';
$port='5434';
$user = 'postgres';
$password = 'postgresql';

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}


?>