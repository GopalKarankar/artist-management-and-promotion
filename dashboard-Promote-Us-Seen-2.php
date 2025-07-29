<?php session_start(); ?>

<?php 
    include "conn.php";

    $id=$_GET['id'];

    $status="Seen";

    $sql="update promote set status=? where id=?";

    $stmt=$conn->prepare($sql);

    $stmt->bind_param('si',$status,$id);

    if ($stmt->execute()) {
        header("Location:dashboard-Promote-Seen.php?msg=apd2pr");  

    } else {
        echo "Query failed.";
    }
    


    $stmt->close();
    $conn->close();

?>