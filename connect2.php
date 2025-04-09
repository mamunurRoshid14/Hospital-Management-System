<?php
// Create connection
$conn = new mysqli('sql110.epizy.com', 'epiz_33909013', 'vEcPPpb1J5', 'epiz_33909013_dbsproject7');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$patientID = $_POST['patientId'];
$department = $_POST['department'];
$doctorName = $_POST['doctor'];
$serviceType = $_POST['serviceType'];
$currentDateTime = date('Y-m-d H:i:s');

// Check if patient ID exists in patient information table
$stmt = $conn->prepare("SELECT * FROM patient_information WHERE userid = ?");
$stmt->bind_param("i", $patientID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Generate service ID
    $serviceID = rand(10000000,99999999);

    // Prepare statement and bind parameters
    if($stmt = $conn->prepare("INSERT INTO service_info (serviceid, patient_id, department, doctor_name, service_type, currentDateTime) VALUES (?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param("iissss",$serviceID, $patientID, $department, $doctorName, $serviceType, $currentDateTime);

        // Execute statement
        if($stmt->execute()) {
            echo "Thank you for submitting the form!";
            header("Location: success2.php?userid=".$serviceID);
        } else {
            echo "Oops! Something went wrong and we couldn't store your information in the database.";
        }

        // Close statement
        $stmt->close();
    } else {
        // Handle statement preparation error
        echo "Oops! Something went wrong and we couldn't prepare the statement.";
    }
} else {
    // Patient ID not found in patient information table
    echo "Patient ID not found in our records. Please try again with a valid patient ID.";
}

// Close connection
$conn->close();
?>
