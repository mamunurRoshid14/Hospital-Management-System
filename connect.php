<?php
// Create connection
$conn = new mysqli('sql110.epizy.com', 'epiz_33909013', 'vEcPPpb1J5', 'epiz_33909013_dbsproject7');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$userid=rand(100000, 999999);
// Prepare statement and bind parameters
$stmt = $conn->prepare("INSERT INTO patient_information (userid, name, age, gender, contact_number, address, blood_group) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isissss", $userid, $_POST['name'], $_POST['age'], $_POST['gender'], $_POST['contactNumber'], $_POST['address'], $_POST['bloodGroup']);

// Execute statement
if($stmt->execute()) {
    // Redirect to success page with user ID as parameter
    header("Location: success.php?userid=".$userid);
} else {
    echo "Oops! Something went wrong and we couldn't store your information in the database.";
}


// Close statement and connection
$stmt->close();
$conn->close();
?>
