<?php include_once 'connection_chef.php';
if(isset($_POST['send']))
{
    $ord_no = $_POST['order_no_w'];
    $dish_name_w = $_POST['dish_w'];
    $table_n_w = $_POST['table_no_w'];
    $date_w = date('y-m-d h:i:s');

    $sql_insert = mysqli_query($con,"INSERT INTO `order_waiter` (`Order_no_w`, `Dish_name_w`,`Table_no_w`, `Status_w`, `Order_date_w`) VALUES ('$ord_no', '$dish_name_w','$table_n_w', '0', current_timestamp())");

    if($sql_insert)
    {
        echo"<script>alert('Your info received successfully');</script>";
    }
    else
    {
        echo mysqli_error($con);
        exit;
    }
}



?>

<!DOCTYPE html>
<html lang = "en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Proflie</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    >

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/profile.js"></script>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
      crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=" sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- boostrap CDN link used for notifications count and icons  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- own_styles css file link(used for notifications)  -->
    <link rel="stylesheet" type ="text/css" href="css/own_styles.css">
  </head>

    <body>

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল (Chef Profile)</a>

        <div id="menu-bar" class="fas fa-bars"></div>
        <?php
        $sql_get_c = mysqli_query($con,"SELECT * FROM order_chef WHERE status =0");
        $count_c = mysqli_num_rows($sql_get_c);
        
        
        
        ?>

        <nav class="navbar">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Orders Pending  <span class="badge text-bg-danger" id = "count"><?php echo $count_c; ?></span>
          </a>
          <ul class="dropdown-menu">
            
            <?php 
              $sql_get1_c = mysqli_query($con,"SELECT * FROM order_chef WHERE status =0");
              if(mysqli_num_rows($sql_get_c)>0)
              {
                echo'<a class="dropdown-item text-dark" herf = "#" id="center">Order Numbers</a>
                <div class = "dropdown-divider"></div>';
                while($result = mysqli_fetch_array($sql_get1_c))
                {
                  echo'<a class="dropdown-item text-danger" href="read_order_chef.php?id='.$result['Order_no'].'">'.$result['Order_no'].'</a>';
                  
                }
              }
              else
              {
                echo'<a class="dropdown-item text-danger" href="#">There is no oreder till now!</a>';
              }

            ?>
          </ul>
        </nav>

    </header>
    <main>
            <section>
                <div class="container py-5 h-100"style="margin-top: 50px;">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="card" style="border-radius: 1rem;">
                              <div class="card-body text-center">
                                  
                                  <h3 class="my-3" style="color: #ff3838;"><i><?php session_start();
                                  $name= $_SESSION["name"];
                                  echo "<h4>" . $name . "</h4>";                                  
                                  ?></i></h3>
                                  <p class="text-muted mb-1" style="font-size: 15px;">Chef</p>
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
                                  
                                  echo "<h4>" .$_SESSION["phone"] . "</h4>";
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
                                 
                                  echo "<h4>" . $_SESSION["nid"] . "</h4>";
                                  ?></p>
                                </div>
                              </div>
                              
                                
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </section>

                  <section class="order" id="order">

                  
      

        
        
                  <h1 class="heading"> <span>Order</span>Done </h1>
        <div class="container" id="center">
            <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            

                <form method="post">
                      
                    <div class="form-group">
                        <h1><label for="exampleFormControlTextarea1">Enter Order Number</label></h1>
                        <textarea class="form-control" name="order_no_w" id="exampleFormControlTextareal" rows="3" placeholder="Type order number"></textarea>
                    </div>
                    <div class="form-group">
                        <h1><label for="exampleFormControlTextarea1">Enter Table Number</label></h1>
                        <textarea class="form-control" name="table_no_w" id="exampleFormControlTextareal" rows="3" placeholder="Type table number"></textarea>
                    </div>



                    <div class="form-group">
                        
                        <h2><label><h1>Choose Done Dishes</h1>
                        <input list="dishes" name="dish_w" placeholder="Tap here to select "/></label></h2>
                        <datalist id="dishes">
                            <option value="Double Decker">
                            <option value="BBQ Chicken Burger">
                            <option value="Sandwich">
                            <option value="Chicken Swarma">
                            <option value="Chicken Fries">
                            <option value="Omletes">
                        </datalist>
                    <div>

                         
                    </div>
                    
                    <button 
                                class="btn" 
                                name = "send"
                                type="submit" 
                                style="margin-top: 30px;">
                                    <h2>Submit</h2>
                                </button>

                </form>

            </div>
            

    </section>
            
        </main>

        <footer>
            <section class="footer">

                <div class="share">
                    <a href="#" class="btn"><h2>facebook</h2></a>
                    <a href="#" class="btn"><h2>instagram</h2></a>
                </div>
        
                <h1 class="credit"> created by <span> CSE-370 G-06 Members </span> | all rights reserved! </h1>
        
            </section>
        </footer>

    </body>

</html>