<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sportsclub";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO events (title, description, date, time, location, sport, age_group, registration_link, contact_information, image_filename) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $EventTitle, $EventDescription, $EventDate, $EventTime, $EventLocation, $EventSport, $EventAgeGroup, $EventRegistrationLink, $EventContactInformation, $EventImageFilename);

    // Set parameters and execute
    $EventTitle = $_POST["EventTitle"];
    $EventDescription = $_POST["Message"];
    $EventDate = $_POST["EventDate"];
    $EventTime = $_POST["EventTime"];
    $EventLocation = $_POST["EventLocation"];
    $EventSport = $_POST["EventSport"];
    $EventAgeGroup = $_POST["EventAgeGroup"];
    $EventRegistrationLink = $_POST["EventRegistrationLink"];
    $EventContactInformation = $_POST["EventContactInformation"];
    
    // Handle image upload
    if (isset($_FILES['EventImageFilename']) && $_FILES['EventImageFilename']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        if (move_uploaded_file($_FILES['EventImageFilename']['tmp_name'], $uploadedFile)) {
            $EventImageFilename = $_FILES['EventImageFilename']['name'];
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to move uploaded file"));
            exit;
        }
    } else {
        $EventImageFilename = ''; // Default value if no image uploaded
    }

    // Execute SQL
    if ($stmt->execute()) {
        // Data inserted successfully
        echo json_encode(array("status" => "success"));
    } else {
        // Error inserting data
        echo json_encode(array("status" => "error", "message" => $conn->error));
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
