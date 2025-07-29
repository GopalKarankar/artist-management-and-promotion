<?php session_start(); ?>

<?php
include 'conn.php';


$uploadDir = "image/live/";
$uId=$_POST['uId'];
echo $uId;

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_FILES['images']['name'][0])) {

    $stmt = $conn->prepare("INSERT INTO pliveshw (uId, imageName, imageType, imageSize, imageDirectory, timeOfUpload) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ississ", $uId, $imageName, $imageType, $imageSize, $imageDirectory, $timeOfUpload);

    foreach ($_FILES['images']['name'] as $key => $name) {
        $tmpName = $_FILES['images']['tmp_name'][$key];
        $size    = $_FILES['images']['size'][$key];
        $type    = $_FILES['images']['type'][$key];
        $error   = $_FILES['images']['error'][$key];

        if ($error === UPLOAD_ERR_OK) {

                    $targetFile = $uploadDir . basename($name);
            
                    // Create directory if it doesn't exist
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }

                    if (move_uploaded_file($tmpName, $targetFile)) {
                        $imageName = basename($name);
                        $imageType = $type;
                        $imageSize = $size;
                        $imageDirectory  = $targetFile;

                        $stmt->execute();
                    } else {
                        echo "Failed to move file: " . $name . "<br>";
                    }

            } else {
                echo "Error uploading file: " . $name . " (Error code: $error)<br>";
            }
    }

    $stmt->close();
    $conn->close();

    // echo "Upload and database insertion completed.";
    header("Location:dashboard-Pvsongs-Add.php?uId=$uId");

} else {
    echo "No files selected.";
}

?>
