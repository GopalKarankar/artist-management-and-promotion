<?php session_start(); ?>


<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId'];  

$pDetails = $_POST['pDetails'];  


 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `ptechnical` ( `uId`, `pDetails`, `timeOfUpload`)  VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("iss", $uId, $pDetails, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {

    echo "<script>
        if (confirm('Requirements added successfully, do you want add more Requirements ?')) {
            window.location.href = 'dashboard-Ptechnical-Add.php?uId=$uId';
        }else{
            window.location.href = 'dashboard-Pdighandles-Add.php?uId=$uId';            
        }
    </script>";

    // header("Location:dashboard-Pcelebrity-Add.php?uId=$uId");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
