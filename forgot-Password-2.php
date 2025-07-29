<?php
session_start();
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Check if username exists
    $stmt = $conn->prepare("SELECT password FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        header("Location: forgot-Password.php?msg=Invalid username.");
        exit();
    }

    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verify old password
    if (!password_verify($old_password, $hashed_password)) {
        header("Location: forgot-Password.php?msg=Old password is incorrect.");
        exit();
    }

    // Security: hash the new password
    $new_password_hashed = password_hash($new_password, PASSWORD_BCRYPT);

    // Update the password securely
    $update_stmt = $conn->prepare("UPDATE admin SET password = ? WHERE username = ?");
    $update_stmt->bind_param("ss", $new_password_hashed, $username);

    if ($update_stmt->execute()) {
        header("Location: log-In.php?msg2=Password reset successfully. Please log in.");
    } else {
        header("Location: forgot-Password.php?msg=Error updating password. Please try again.");
    }

    $update_stmt->close();
    $stmt->close();
} else {
    header("Location: forgot-Password.php");
}
?>
