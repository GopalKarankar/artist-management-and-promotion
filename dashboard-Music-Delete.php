<?php session_start(); ?>

<?php

include 'conn.php';

// Get the ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $old_directory=$_GET['directory'];

    // echo $old_directory;
    // unlink($old_directory);

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM `music` WHERE id = ?");
    
    // Bind parameters (assuming `id` is an integer)
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location:Music-Videos.php?msg=apd2ml");
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
