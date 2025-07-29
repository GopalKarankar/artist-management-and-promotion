<?php

    // Database connection
    include "conn.php";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data and sanitize
    $fullName = $_POST['fullName'];
    $senderEmail = $_POST['senderEmail'];
    $phNumber = $_POST['phNumber'];
    $artist = $_POST['artist'];
    $details = $_POST['details'];
    $status = "pending";


 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

    // Insert into database
    $sql = "INSERT INTO hired (fullName, senderEmail, phNumber, artist, details, status, timeOfUpload) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    
        $stmt->bind_param("sssssss", $fullName, $senderEmail, $phNumber, $artist, $details, $status, $timeOfUpload);
        
        if ($stmt->execute()) {

            header("Location:book-Show-Sent.php");

        } else {
            echo "<script>alert('Error submitting booking: " . $stmt->error . "');</script>";
        }
        
        $stmt->close();

    $conn->close();


?>
