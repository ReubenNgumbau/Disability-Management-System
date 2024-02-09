<?php
include'connection.php';
// Start a session to store user information
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, set session variables and redirect to the dashboard
        $user = $result->fetch_assoc();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_email"] = $user["email"];
        header("Location: Dashbord/index.php");
        exit();
    } else {
        // User does not exist or credentials are incorrect, display an error message
        echo '<div class="message error"><p>Login failed. Please check your email and password.</p></div>';
    }

    // Close the database connection
    $conn->close();
}
?>
