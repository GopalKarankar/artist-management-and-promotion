<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - get in touch</title>

    
<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <?php include "dashboard-Aside.php"; ?>


    <div class="main">
        <h2 class="text-center"><i class="fa-solid fa-address-book"></i><div class="d-inline bangers-regular">&nbsp Get in touch with us</div></h2>

    

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered " style="border-collapse:collapse;"  >
            <tr>
                <th class="text-center">Phone</th>
                <th class="text-center">Whatsapp</th>
                <th class="text-center">Email</th>
                <th class="text-center">Address</th>
                <th class="text-center" >Google map link</th>
                <th class="text-center">Upload Time</th>
                <th class="text-center">Actions</th>
            </tr>

            <?php 
                include "conn.php";

                // $status='all';

                $sql="select * from getintouch  order by id desc";

                $stmt=$conn->prepare($sql);

                // $stmt->bind_param('s',$status);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

            <tr>
                <td class="text-center"><?= $data['phone'] ?></td>
                <td class="text-center"><?= $data['whatsapp'] ?></td>
                <td class="text-center"><?= $data['email'] ?></td>
                <td class="text-center"><?= $data['address'] ?></td>
                <td class="text-center" ><div class="toflw"><?= $data['gmap'] ?></div></td>
                <td class="text-center"><?= $data['timeOfSending'] ?></td>
                <td class=" text-center" >

                        <a class="  text-success d-inline" title="Edit"  href="dashboard-Get-In-Touch-Edit.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> 

                </td>


                <?php 

                    }

                 ?>
            </tr>
        </table>    
        </div>
        
    </div>

    <?php include "preloader.php"; ?>



    <!-- Include Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>


    <script type="text/javascript" >
        
        function confirmDelete() {
            return confirm("Are you sure you want to delete this ?");
        }

    </script>

</body>
</html>