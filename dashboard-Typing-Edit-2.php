<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$txt1 = $_POST['txt1'];  
$txt2 = $_POST['txt2'];  
$txt3 = $_POST['txt3'];  
// $size = $_POST['size'];  

// SQL statement with placeholders
$sql = "UPDATE `typing` SET  `txt1`=?, `txt2`=?, `txt3`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);


$stmt->bind_param("sssi",  $txt1,  $txt2,  $txt3, $id);



// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-Typing.php?msg=apd2typing");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
