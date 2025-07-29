<?php session_start(); ?>

<?php

include 'conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql="SELECT id, username, password FROM admin WHERE username = ?";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {

            // Regenerate session ID for security
            session_regenerate_id(true);

            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            // $_SESSION['hashed_password'] = $hashed_password;

            // echo  $_SESSION['id'] ;
            // echo  $_SESSION['username'] ;
            // echo  $_SESSION['hashed_password'] ;

            // Redirect to the dashboard
            header("Location: dashboard-Hired-All.php?msg=apd2ah");

            exit();

        } else {
            // Redirect to the dashboard
            header("Location: log-In.php?msg=wrong password");
        }
    } else {
        // echo "Username not found.";
            header("Location: log-In.php?msg=wrong Username or password");
    }

    $stmt->close();
}

$conn->close();
?>
