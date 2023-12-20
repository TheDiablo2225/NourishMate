<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php"); // Redirect to the dashboard or any other page after successful sign-in
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!-- Your HTML form for sign-in -->
<form method="post" action="signin.php">
    <!-- Include your form fields (e.g., username, password) here -->
    <input type="submit" value="Sign In">
</form>
