<?php session_start(); ?>

<?php

// Database connection
include 'conn.php';

// Check connection
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
}

// Parameters
$uId = $_GET['id'];
$id = $_GET['id']; // For the `intro` table's id column

if ($uId && $id) {

    // Function to delete row and unlink image
    function deleteRowAndUnlinkImage($conn, $table, $uId) {

        // Fetch image path
        $sqlSelect = "SELECT imageDirectory FROM `$table` WHERE uId = ?";
        
        if ($stmtSelect = $conn->prepare($sqlSelect)) {

            $stmtSelect->bind_param("i", $uId);
            $stmtSelect->execute();
            $stmtSelect->bind_result($imagePath);

            while ($stmtSelect->fetch()) {

                if ($imagePath && file_exists($imagePath)) {
                    unlink($imagePath); // Delete the file
                }

            }

            $stmtSelect->close();
        
        }

        // Delete the row
        $sqlDelete = "DELETE FROM `$table` WHERE uId = ?";
        
        if ($stmtDelete = $conn->prepare($sqlDelete)) {
            $stmtDelete->bind_param("i", $uId);
            $stmtDelete->execute();
            $stmtDelete->close();
        }
    
    }// function closes



    // Tables to delete rows and images
    $tablesWithImages = ['pintro', 'pcelebrity', 'pdighandles', 'pliveshw'];
    
    foreach ($tablesWithImages as $table) {
        deleteRowAndUnlinkImage($conn, $table, $uId);
    }

    // Tables to delete rows only
    $tablesWithoutImages = ['pabout', 'pperformedat', 'ptechnical', 'pvsongs', 'pvsocial'];
    
    foreach ($tablesWithoutImages as $table) {

        $sqlDelete = "DELETE FROM `$table` WHERE uId = ?";

        if ($stmt = $conn->prepare($sqlDelete)) {
            $stmt->bind_param("i", $uId);
            $stmt->execute();
            $stmt->close();
        }
    
    }

    // Delete row by id from intro table
    $sqlDeleteIntro = "DELETE FROM `intro` WHERE id = ?";
    
    if ($stmtIntro = $conn->prepare($sqlDeleteIntro)) {
    
        $stmtIntro->bind_param("i", $id);
        $stmtIntro->execute();
        $stmtIntro->close();
    
    }

    // echo "Deletion successful.";
    header("Location:artists-N-Booking.php");

} else {

    echo "Error: Missing uId or ID.";

}

$conn->close();

?>
