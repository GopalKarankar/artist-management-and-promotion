<?php session_start(); ?>

<?php
                include "conn.php";


if ($conn->connect_error) {
    echo json_encode(["message" => "Connection failed"]);
    exit;
}

$id = $_POST['id'];
$status = $_POST['status'];
$email = $_POST['email'];


$stmt = $conn->prepare("UPDATE ticket SET status = ? WHERE id = ?");
$stmt->bind_param("si", $status, $id);
$stmt->execute();


include('smtp/PHPMailerAutoload.php');

$msg="Your Ticket booking request has been ".$status;


 smtp_mailer($email,'Mail from Midwave productions',$msg);


function smtp_mailer($to,$subject, $msg){

    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    // $mail->SMTPDebug = 2; 
    $mail->Username = "karankargopal0@gmail.com";
    $mail->Password = "ougmqgykhcnenwjl";
    $mail->SetFrom("karankargopal0@gmail.com");
    $mail->Subject = $subject;
    $mail->Body =$msg;
    $mail->AddAddress($to);

    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));

    $mail->Send();

    // if(!$mail->Send()){
    //     echo $mail->ErrorInfo;
    // }else{
    //     return 'Sent';
    //     echo json_encode(["message" => "Status updated to '$status'"]);

    // }

}



echo json_encode(["message" => "Status updated to '$status' "]);

?>

