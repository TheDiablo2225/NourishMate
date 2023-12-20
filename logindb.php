<?php
session_start();
include('connectiondb.php');

if ($conn) {
    echo "Connection successful";
} else {
    echo "Connection failed";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    echo "<br> $userid <br> $password";

    $query = "SELECT userid, pwd FROM userlog WHERE userid = $1";
    $result = pg_query_params($conn, $query, array($userid));
    $user = pg_fetch_assoc($result);

    if (!$result) {
        die("Select query failed: " . pg_last_error());
    } else {
        echo "<br>Selection done";
    }

    if ($user) {
        // Assuming you're storing passwords as plaintext in the database (not recommended)
        if (strcmp($password, $user['pwd']) == 0) {
            $_SESSION['user_id'] = $user['userid'];
            header("Location: watertracker1.php");
            //exit();
        } else {
            echo "Invalid login ID or password";
        }
    } else {
        echo "User not found";
    }
}
?>
