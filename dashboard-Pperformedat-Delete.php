<?php session_start(); ?>

<?php

include 'conn.php';

// Get the ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $uId = $_GET['uId'];

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM `pperformedat` WHERE id = ?");
    
    // Bind parameters (assuming `id` is an integer)
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location:dashboard-P-View.php?msg=apd2pperformedat&id=$id&uId=$uId");
        // echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
