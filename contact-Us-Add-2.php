<?php session_start(); ?>

<?php

include 'conn.php';

// Sample values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$inquiry = $_POST['inquiry'];
$message = $_POST['message'];
$status = "pending";

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 


// Prepare the SQL statement
$sql = "INSERT INTO `contactus` (`name`, `email`,  `phone`, `inquiry`, `message`, `timeOfSending`,`status`) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);


// Bind parameters
$stmt->bind_param("sssssss", $name, $email,  $phone, $inquiry, $message, $timeOfUpload, $status,);


// Execute the statement
if ($stmt->execute()) {
    // echo "Record inserted successfully.";
    header("Location:contact-Us-Sent.php");
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$mysqli->close();
?>
