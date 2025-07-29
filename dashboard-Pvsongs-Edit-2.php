<?php session_start(); ?>

<?php

include "conn.php";



            // SQL statement with placeholders
            $sql = "UPDATE pvsongs SET  `vLink`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $uId = $_POST['uId']; // Replace with the actual uId

            $vLink = $_POST['vLink'];  

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssi", $vLink, $timeOfUpload, $id);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-P-View.php?msg=apd2ml&id=$id&uId=$uId");
            } else {
                echo "Error updating record: " . $stmt->error;
            }



// Close statement and connection
$stmt->close();
$conn->close();

?>
