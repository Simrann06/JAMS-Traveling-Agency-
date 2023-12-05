<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND 
        pwd = :pwd;";

        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Bind values to placeholders
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);

        // Execute the statement
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        /*
        // Not using named parameters

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email]);
        */

        // Send the user back to the front page
        header("Location: ../signup.php");

        // Close the connection and statement
        $pdo = null;
        $statement = null;

        die();
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
}
