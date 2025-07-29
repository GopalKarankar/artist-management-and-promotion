<?php session_start(); ?>


<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId'];  

$plocation = $_POST['plocation'];  


 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `pperformedat` ( `uId`, `plocation`, `timeOfUpload`)  VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("iss", $uId, $plocation, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {

    echo "
    <script>
        if (confirm('City added successfully, do you want add more cities ?')) {
            window.location.href = 'dashboard-Pperformedat-Add.php?uId=$uId';
        }else{
            window.location.href = 'dashboard-Pliveshw-Add.php?uId=$uId';            
        }
    </script>";

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
