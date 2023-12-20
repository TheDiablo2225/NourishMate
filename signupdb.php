 <?php
include('connectiondb.php');

$uid = $_POST['userid'];
$uname = $_POST['username'];
$mailid = $_POST['email'];
$pwd = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gender'];

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
