<?php session_start(); ?>

<?php 
	include "conn.php";

	$id=$_GET['id'];

	$status="Unconfirmed";

	$sql="update ticket set status=? where id=?";

	$stmt=$conn->prepare($sql);

	$stmt->bind_param('si',$status,$id);

	if ($stmt->execute()) {
		header("Location:dashboard-Ticket-Unconfirmed.php?msg=apd2dbt");	

	} else {
		echo "Query failed.";
	}
	


	$stmt->close();
	$conn->close();

?>