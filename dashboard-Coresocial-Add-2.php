<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$logo = $_POST['logo'];  
// $size = $_POST['size'];  


// SQL insert query with prepared statement
$sql = "INSERT INTO `coresocial` ( `logo`)  VALUES (?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("s", $logo);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        header("Location:dashboard-Coresocial.php?msg=apd2cs");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
