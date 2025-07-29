<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$address = $_POST['address'];  

$eventDate = $_POST['eventDate'];  

$eventTime = $_POST['eventTime'];  
$eventTime = date("h:i A", strtotime($eventTime));


 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `upcoming` ( `address`, `eventDate`, `eventTime`, `timeOfUpload`)  VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssss",  $address, $eventDate, $eventTime, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        // header("Location:dashboard-Upcoming.php?msg=apd2upcg");
        header("Location:book-Show.php");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
