<?php

    // Database connection
    include "conn.php";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data and sanitize
    $eventID = $_POST['eventID'];
    $fullName = $_POST['fullName'];
    $senderEmail = $_POST['senderEmail'];
    $phNumber = $_POST['phNumber'];
    $address = $_POST['address'];
    $status = "pending";


 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

    // Insert into database
    $sql = "INSERT INTO ticket (eventID ,fullName, senderEmail, phNumber, address, timeOfUpload, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    
        $stmt->bind_param("sssssss", $eventID, $fullName, $senderEmail, $phNumber, $address, $timeOfUpload, $status);
        
        if ($stmt->execute()) {

            header("Location:book-Ticket-Sent.php");

        } else {
            echo "<script>alert('Error submitting booking: " . $stmt->error . "');</script>";
        }
        
        $stmt->close();

    $conn->close();


?>
