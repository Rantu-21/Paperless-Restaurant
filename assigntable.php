<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Connect to the database

  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "370";

  $conn = mysqli_connect($host, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

  //Get the table number and waiter ID from the form
  $table_no = $_POST['table'];
  $waiter_id = $_POST['waiter'];
  $date = $_POST['date'];

  // Select all rows from the assignments table where the table number and waiter ID match
  // $sql = "update * FROM waiter WHERE table_no = '$table_no' AND waiter_id = '$waiter_id'";
  //$sql = "UPDATE waiter SET t_no='$table_no', waiter_id='$waiter_id', date_no='$date' WHERE t_no = '$table_no' AND waiter_id = '$waiter_id'";
  $sql= "UPDATE waiter SET waiter_id='$waiter_id', t_no='$table_no', date_no='$date' WHERE t_no = '$table_no'";
  $result = mysqli_query($conn, $sql);




  
}

?>


<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assign table</title>
    
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous"
        >
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
    
    </head>

    <body>

        <header>
            <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল</a>
        </header>

        <main>
      
            <section class="vh-100 gradient-custom" style="background-image: url('login_bg-transformed.jpeg');">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                      <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                          <div class="mb-md-5 mt-md-4 pb-5">

                            <h1 style="color: #ff3838;"><u><strong>Table Assign</strong></u></h1>
                            
                           
          <form action="assigntable.php" method="post">
            <div class="form-group" >

              <h3><label><strong>Select a table:</strong> 
                  <input list="tables" name="table" placeholder="Tap here to select " /></label></h3>
              <datalist id="tables">
                <option value="t_01">
                <option value="t_02">
                <option value="t_03">
                <option value="t_04">

              </datalist>
            </div>

            <br>

            <div class="form-group">

              <h3><label><strong>Select a waiter:</strong> 
                  <input list="waiters" name="waiter" placeholder="Tap here to select " /></label></h3>
              <datalist id="waiters">
                <option value="w_01">
                <option value="w_02">
                <option value="w_03">
                <option value="w_04">

              </datalist>
            </div>

            <br>


            <div class="flex flex-wrap formbold--mx-3">
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5 w-full" name="date_no" id='waiter-id'>
                  <label for="date" class="formbold-form-label"> <h3><strong>Date :</strong></h3> </label>
                  <br>
                  <h3><input type="date" name="date" id="date" class="formbold-form-input" /></h3>
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
              </div>
            </div>
            <div>
              <!-- <button class="btn">Assign</button> -->
            </div>
            




            <button 
                                class="btn" 
                                type="submit" 
                                name="send"
                                style="margin-top: 50px;">
                                    Assign
                                </button>

          </form>
                            <br>



                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
        </main>

        <footer>
            <section class="footer">

                <div class="share">
                    <a href="#" class="btn">facebook</a>
                    <a href="#" class="btn">instagram</a>
                </div>
        
                <h1 class="credit"> created by <span> CSE-370 G-06 Members </span> | all rights reserved! </h1>
        
            </section>
        </footer>
    
        <!--Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
            crossorigin="anonymous">
        </script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

    </body>

</html>