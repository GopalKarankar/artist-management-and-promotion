<?php session_start(); ?>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'artist');

if ($mysqli->connect_error) {
    echo json_encode(["message" => "Connection failed"]);
    exit;
}

$id = $_POST['id'];
$status = $_POST['status'];
$email = $_POST['email'];

$stmt = $mysqli->prepare("UPDATE hired SET status = ? WHERE id = ?");
$stmt->bind_param("si", $status, $id);
$stmt->execute();


include('smtp/PHPMailerAutoload.php');

$msg="Your Artist hiring request has been ".$status;


 smtp_mailer($email,'Casually',$msg);


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


<!-- ================================================ -->

color schemes:
night sky blue : background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);

 Elegant Dark & Vibrant : background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 40%, #ff0057 100%);


<!-- ================================================ -->

          <!-- Privacy policy -->
          <div class="row">
            <div class="col">
                            
              <div class="row ">

                <div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2pp") { echo $_GET['msg2'];} ?>">
                  <a href="privacy-policy.php?msg2=dapd2pp">                  
                    <p class="text-hover  px-2" style="font-size: 22.3px;">PRIVACY POLICY</p>
                  </a>
                </div>

              </div>

            </div>
          </div>


          <!-- TERMS AND CONDITIONS -->
          <div class="row">
            <div class="col">
                            
              <div class="row ">

                <div class="col-10  <?php if (!empty($_GET['msg2'])&&$_GET['msg2']=="dapd2tnc") { echo $_GET['msg2'];} ?>">
                  <a href="terms-Conditions.php?msg2=dapd2tnc">                 
                    <p class="text-hover  px-2" style="font-size: 22.3px;">TERMS AND CONDITIONS</p>
                  </a>
                </div>

              </div>

            </div>
          </div>

<!-- ================================================ -->


          <!-- "Privac policy" -->
          <div class="row">
            <div class="col">
              
              <div class="row" style=" border-bottom:0.5px solid #858585;">
                
              </div>

              <div class="row ">


                <div class="col-10">
                  <a href="privacy-Policy.php">
                    <p class="text-hover" style="font-size: 22.3px;">PRIVACY POLICY</p>   
                  </a>
                </div>

                <div class="col-2">
                  <a href="privacy-Policy.php">
                    <img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
                  </a>
                </div>  

              </div>

            </div>
          </div>        
          

          <!-- "Terms and conditions" -->
          <div class="row">
            <div class="col">
              
              <div class="row" style=" border-bottom:0.5px solid #858585;">
                
              </div>

              <div class="row ">


                <div class="col-10">
                  <a href="terms-Conditions.php">
                    <p class="text-hover" style="font-size: 22.3px;">TERMS AND CONDITIONS</p>   
                  </a>
                </div>

                <div class="col-2">
                  <a href="dashboard-Book-All.php?msg=apd2dba">
                    <img src="image/sm1.svg" width="34px" height="29px" style=" margin-top: 7px; right: 0px;" alt="">
                  </a>
                </div>  

              </div>

            </div>
          </div>        

<!-- ================================================ -->
          { data: "id" },
          { data: "fullName" },
          { data: "senderEmail" },
          { data: "phNumber" },
          { data: "artist" },
          { data: "details" },
          { data: "status" },
          { data: "timeOfUpload" },
<!-- ================================================ -->

            <!-- Portfolio -->
            <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2pintro") { echo $_GET['msg'];   } ?>  " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">

                <i class="fa-solid fa-address-book"></i>

                <span class="invsbl" id="invsbl" >Portfolio &nbsp <span class="badge badge-success"><?php //$data['cnt'] ?></span></span>

            </a>

            <div class="collapse" id="collapseExample">
              <div class="card card-body bg-dark">
                
                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2pabout") { echo $_GET['msg'];   } ?>  " >About</a>
                
                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2pperformedat") { echo $_GET['msg']; } ?> " >Places performed</a>

                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2evnts2") { echo $_GET['msg'];   } ?>  ">Live shows</a>

                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2ml2") { echo $_GET['msg'];  } ?>  ">Video songs</a>

                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2pceleb") { echo $_GET['msg'];   } ?>  ">Celebrity performances</a>

                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2ptechnical") { echo $_GET['msg'];   } ?>  ">Technical requirements</a>

                <a class="d-block text-decoration-none  p-3 border-black <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2phandles") { echo $_GET['msg']; } ?>  ">Digital handles</a>

              </div>
            </div>
