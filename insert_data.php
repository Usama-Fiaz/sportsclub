<?php
// Define validation variables and set to empty values
$username = $email = $preferred_sports = $password = $confirm_password = "";

// Function to sanitize and validate input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate and process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form fields
    $username = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $preferred_sports = test_input($_POST["preferred_sports"]);
    $password = test_input($_POST["password"]);
    $confirm_password = test_input($_POST["confirm_password"]);

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "password_mismatch"; // Send password mismatch error response to JavaScript
        exit; // Stop further execution
    }

    // Check if username already exists
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sportsclub";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $check_username_sql = "SELECT * FROM members WHERE username = ?";
    $check_username_stmt = $conn->prepare($check_username_sql);
    $check_username_stmt->bind_param("s", $username);
    $check_username_stmt->execute();
    $check_username_result = $check_username_stmt->get_result();
    if ($check_username_result->num_rows > 0) {
        echo "username_exists"; // Send username exists error response to JavaScript
        $check_username_stmt->close();
        $conn->close();
        exit; // Stop further execution
    }
    $check_username_stmt->close();

    // Check if email already exists
    $check_email_sql = "SELECT * FROM members WHERE email = ?";
    $check_email_stmt = $conn->prepare($check_email_sql);
    $check_email_stmt->bind_param("s", $email);
    $check_email_stmt->execute();
    $check_email_result = $check_email_stmt->get_result();
    if ($check_email_result->num_rows > 0) {
        echo "email_exists"; // Send email exists error response to JavaScript
        $check_email_stmt->close();
        $conn->close();
        exit; // Stop further execution
    }
    $check_email_stmt->close();

    // Insert data into the database
    $insert_sql = "INSERT INTO members (username, email, preferred_sports, password) VALUES (?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ssss", $username, $email, $preferred_sports, $password);

    if ($insert_stmt->execute()) {
        echo "success"; // Send success response to JavaScript
    } else {
        echo "error"; // Send error response to JavaScript
    }

    // Close the connection
    $insert_stmt->close();
    $conn->close();
}
?>
