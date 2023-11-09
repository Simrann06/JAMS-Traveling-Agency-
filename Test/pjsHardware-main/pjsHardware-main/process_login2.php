<?php
// Load database configuration from SQLTools connection
$sqlToolsConfig = [
    "server" => "localhost",
    "port" => 3306,
    "database" => "JAMS",
    "username" => "sqluser",
    "password" => "Pa$$w0rd"
];

// Initialize connections
$conn = new mysqli(
    $sqlToolsConfig["server"],
    $sqlToolsConfig["username"],
    $sqlToolsConfig["password"],
    $sqlToolsConfig["database"],
    $sqlToolsConfig["port"]
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Prepare a SQL statement to retrieve user data
    $sql = "SELECT user_id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the entered username exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the entered password against the hashed password from the database
        if (password_verify($enteredPassword, $hashedPassword)) {
            // Authentication successful - redirect to a success page or perform further actions
            // For example, you can set a session variable to remember the user's login status
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header('Location: welcome.php'); // Redirect to a welcome page
            exit();
        }
    }

    // Authentication failed - redirect back to the login page with an error message
    header('Location: Test/pjsHardware-main/pjsHardware-main/customerLogin.html');
    exit();
}

// Close the database connection
$conn->close();
?>
