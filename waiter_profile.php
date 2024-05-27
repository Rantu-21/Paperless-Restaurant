<?php include_once 'connection_chef.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiter Profile</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/profile.js"></script>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <li class="nav-item dropdown">
            <?php
                $sql_get= mysqli_query($con,"SELECT * FROM order_waiter WHERE Status_w =0");
                $count= mysqli_num_rows($sql_get);
            ?>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <h2>  Serve Pending  <span class="badge text-bg-danger" id="count1">
                    <?php echo $count; ?>
                </span></h2>
            </a>


            <ul class="dropdown-menu">
            


                <?php
                        $sql_get1= mysqli_query($con,"SELECT * FROM order_waiter WHERE Status_w=0");

                        if(mysqli_num_rows($sql_get1)>0)
                        {
                            echo'<a class="dropdown-item text-dark" herf = "#" id="center"><h3>Table Numbers</h3></a>
                            <div class = "dropdown-divider"></div>';
                          while($result= mysqli_fetch_assoc($sql_get1))
                          {
                            echo '<a class="dropdown-item text-danger" href="read_msg.php?id='.$result['Order_id'].'"><h3>'.$result['Table_no_w'].'</h3></a>';
                            
                          }
                        }
                        else
                        {
                          echo '<a class="dropdown-item text-danger font-weight-bold" href="#"><h3>Nothing in Pending!</h3></a>';
                        }



                ?>


            
            </ul>
                    </li>

    </header>
                
    <br><br>              
    
    <main>
        <section>
                <div class="container py-5 h-100"style="margin-top: 50px;">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="card" style="border-radius: 1rem;">
                              <div class="card-body text-center">
                                  
                                  <h3 class="my-3" style="color: #ff3838;"><i><?php session_start();
                                  
                                  echo "<h4>" . $_SESSION["name"] . "</h4>";
                                  ?></i></h3>
                                  <p class="text-muted mb-1" style="font-size: 15px;">Waiter</p>
                              </div>
                          </div>
                      </div>
                      <br>

                      

                      <div class="col-lg-8">
                          <div class="card mb-4" style="border-radius: 1rem; padding: 8px;">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0" style="font-size: 15px;">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0" style="font-size: 15px;"><?php 
                                  echo "<h4>" . $_SESSION["name"] . "</h4>";
                                  ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0" style="font-size: 15px;">ID</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0" style="font-size: 15px;"><?php 
                                  $id = $_SESSION["id"];
                                  echo "<h4>" . $_SESSION["id"] . "</h4>";
                                  ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0" style="font-size: 15px;">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0" style="font-size: 15px;"><?php 
                                  echo "<h4>" . $_SESSION["phone"] . "</h4>";
                                  ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0" style="font-size: 15px;">NID</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0" style="font-size: 15px;"><?php
                                  echo "<h4>" . $_SESSION["nid"]. "</h4>";
                                  ?></p>
                                </div>
                              </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0" style="font-size: 15px;">Assigned Table</p>
                                </div>
                                <div class="col-sm-9">

                                <?php
                                  $server = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $database = "370";
                                  $a = array();
                                  $conn = mysqli_connect($server, $username, $password, $database);
                                  $s = "Select t_no from waiter where waiter_id=$id";
                                  $r = mysqli_query($conn, $s); 
                                  while($r2 = mysqli_fetch_assoc($r)){
                                    array_push($a, $r2["t_no"]);

                                }
                                  $f = $a[0];

                                echo"<h4>" . $f. "</h4>";  ?>




                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

                 
                </div>
            </section>
        </main>


    
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

    <footer>
        <section class="footer">

            

            <h1 class="credit"> created by <span> CSE-370 G-06 Members </span> | all rights reserved! </h1>

        </section>
    </footer>



</body>