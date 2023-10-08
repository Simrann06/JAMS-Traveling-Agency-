<?php
// Simulated user credentials for demonstration purposes
$validUsername = 'demo_user';
$validPassword = 'demo_password';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Check if the entered username and password match the valid credentials
    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Authentication successful - redirect to a success page or perform further actions
        // For example, you can set a session variable to remember the user's login status
        session_start();
        $_SESSION['username'] = $enteredUsername;
        header('Location: welcome.php'); // Redirect to a welcome page
        exit();
    } else {
        // Authentication failed - redirect back to the login page with an error message
        header('Location: customerLogin.html?error=1');
        exit();
    }
} else {
    // Handle the case where the form was not submitted
    // You can redirect or show an error message as needed
    header('Location: customerLogin.html');
    exit();
}
?>
