<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {

            $id = $_POST['id']; // Replace with the actual id
            $uId = $_POST['uId']; // Replace with the actual uId

            // echo "fail.";
            header("Location:dashboard-Pliveshw-Edit.php?msg=apd2bts&id=$id&uId=$uId");

} else {

            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual id
            $uId = $_POST['uId']; // Replace with the actual uId

            $imageName = $_FILES['image']['name'];
            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];

                unlink($old_directory);

             
            $target_file = "image/live/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 

            // SQL statement with placeholders
            $sql = "UPDATE `pliveshw` SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `timeOfUpload`=? WHERE id=?";

            // Prepare statement
            $stmt = $conn->prepare($sql);


            $stmt->bind_param("sssssi",  $imageName, $imageType, $imageSize, $target_file, $timeOfUpload, $id);



            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-P-View.php?msg=apd2bts&uId=$uId");
            } else {
                echo "Error updating record: " . $stmt->error;
            }
}


// Close statement and connection
$stmt->close();
$conn->close();
?>
