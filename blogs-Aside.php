            
            <!-- Sidebar -->
            <div class="col-md-4">

<!--                 <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
 -->                
                <div class="card my-4" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">
                    <h5 class="card-header" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 40%, #415a77 100%);">Categories</h5>
                    <div >
                        <ul class="blog-aside list-unstyled mb-0">


            <?php 

                include "conn.php";

                $sql="select count(*) as cnt from blogs";

                $stmt=$conn->prepare($sql);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>



                        <li>
                                <a href="blogs.php" class="d-block text-decoration-none  p-2 border-black  <?php if (empty($_GET['msg'])) { echo "apd2blgall";} ?>">All &nbsp 
                                    <span class="badge badge-success"><?= $data['cnt'] ?></span>
                                </a>
                             
                        </li>

            <?php 
                }

                $conn->close();
             ?>



            <?php 

                include "conn.php";

                $bCategory="Music Industry Trends";

                $sql="select count(*) as cnt from blogs where bCategory=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('s',$bCategory);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>


                            <li>
                                <a href="blogs-Read-More-MIT.php?msg=apd2mit" class="d-block text-decoration-none  p-2 border-black  <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2mit") { echo $_GET['msg'];} ?>">Music Industry Trends &nbsp 
                                    <span class="badge badge-success"><?= $data['cnt'] ?></span>
                                </a>
                            </li>

            <?php 
                }

                $conn->close();
             ?>


            <?php 

                include "conn.php";

                $bCategory="Event Management";

                $sql="select count(*) as cnt from blogs where bCategory=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('s',$bCategory);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                            <li>
                                <a href="blogs-Read-More-EM.php?msg=apd2em" class="d-block text-decoration-none  p-2 border-black   <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2em") { echo $_GET['msg'];} ?>">Event Management &nbsp 
                                    <span class="badge badge-success"><?= $data['cnt'] ?></span>
                                </a>
                            </li>

            <?php 
                }

                $conn->close();
             ?>


            <?php 

                include "conn.php";

                $bCategory="Artist Management";

                $sql="select count(*) as cnt from blogs where bCategory=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('s',$bCategory);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                            <li>
                                <a href="blogs-Read-More-AM.php?msg=apd2am" class="d-block text-decoration-none  p-2 border-black   <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2am") { echo $_GET['msg'];} ?>">Artist Management &nbsp 
                                    <span class="badge badge-success"><?= $data['cnt'] ?></span>
                                </a>
                            </li>


            <?php 
                }

                $conn->close();
             ?>


            <?php 

                include "conn.php";

                $bCategory="Midwave News";

                $sql="select count(*) as cnt from blogs where bCategory=?";

                $stmt=$conn->prepare($sql);

                $stmt->bind_param('s',$bCategory);

                $stmt->execute();

                // Get result 
                $result=$stmt->get_result();

                // Fetch data
                while($data=$result->fetch_assoc()){


             ?>

                            <li>
                                <a href="blogs-Read-More-MN.php?msg=apd2mn" class="d-block text-decoration-none  p-2 border-black   <?php if (!empty($_GET['msg'])&&$_GET['msg']=="apd2mn") { echo $_GET['msg'];} ?>">Midwave News &nbsp 
                                    <span class="badge badge-success"><?= $data['cnt'] ?></span>
                                </a>
                            </li>

            <?php 
                }

                $conn->close();
             ?>

                        </ul>
                    </div>
                </div>
                
            </div>
