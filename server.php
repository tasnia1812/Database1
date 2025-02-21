<?php
session_start();

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'project');

// Check for connection errors
if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
}

// Initializing variables
$username = "";
$email    = "";
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Get form values
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    // Form validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 !== $password_2) { array_push($errors, "Passwords do not match"); }

    // Check if username or email already exists
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if ($user['username'] === $username) { array_push($errors, "Username already exists"); }
        if ($user['email'] === $email) { array_push($errors, "Email already exists"); }
    }

    // Register user if no errors
    if (count($errors) == 0) {
        $hashed_password = password_hash($password_1, PASSWORD_DEFAULT); // Secure password hashing

        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        $stmt->execute();

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('Location: index.php');
        exit();
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    if (count($errors) == 0) {
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: index.php');
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
