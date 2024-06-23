<?php
// Include the database connection file
require_once 'main.php';
require_once 'helper.php';
session_start();

// Function to register a new user
function registerUser($conn, $username, $password)
{
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the query
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $hashedPassword);

    if (!$stmt->execute()) {
        return messageBuilder($stmt->error, [], 0);
    }

    return messageBuilder('Register Success', []);
}

// Function to login a user
function loginUser($conn, $username, $password)
{
    // Prepare the query
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Check if the password is correct
        if (password_verify($password, $user['password'])) {
            // Login successful
            return $user;
        }
    }

    // Login failed
    return null;
}

// Example usage
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = registerUser($conn, $username, $password);
    if ($res['success']) {
        header("location:../auth/sign-in.php?afterRegistration=1");
    } else {
        header("location:../auth/sign-up.php?error=" . $res['message']);
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = loginUser($conn, $username, $password);

    if ($user) {
        // Login successful, you can use the user data here
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../comps.php");
    } else {
        // Login failed
        header("location:../auth/sign-in.php?error=1");
    }
}

if (isset($_POST['logout'])) {
    // menghapus semua session
    session_destroy();

    // mengalihkan halaman sambil mengirim pesan logout
    header("location:../index.php?pesan=logout");
}
