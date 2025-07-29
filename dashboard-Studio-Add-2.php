<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$equipName = $_POST['equipName'];  
$equipDescr = $_POST['equipDescr'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `studio` (`equipName`, `equipDescr`, `timeOfUpload`)  VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sss",$equipName, $equipDescr,  $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        header("Location:reserve-Studio.php");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
