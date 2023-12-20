<?php
include('connectiondb.php');

$uid = (int)$_POST['userid']; // Assuming userid is an integer
$uname = pg_escape_string($_POST['username']); // Escape the string
$mailid = pg_escape_string($_POST['email']); // Escape the string
$pwd = pg_escape_string($_POST['password']); // Escape the string
$age = (int)$_POST['age']; // Assuming age is an integer
$gender = pg_escape_string($_POST['gender']); // Escape the string

// Update the value in table2
$queryinsert = "INSERT INTO userlog (userid, username, email, pwd, age, gender) VALUES ($1, $2, $3, $4, $5, $6)";
$params = array($uid, $uname, $mailid, $pwd, $age, $gender);

$result = pg_query_params($conn, $queryinsert, $params);

// Check for errors in the query
if (!$result) {
    die("Insert query failed: " . pg_last_error());
} else {
    echo "Insertion successful";
}

// Close the database connection
pg_close($conn);
?>
