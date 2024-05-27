<?php

$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "370";

    $conn = mysqli_connect($server, $username, $password, $database);
    $username = $_POST["login_name"];
    $email = $_POST["login_email"];
    $nid = $_POST["login_nid"];
    $phone = $_POST["login_phone"];
    $password = $_POST["login_password"];
    $cpassword = $_POST["login_cpassword"];
    $role = $_POST["role"];
    $id = $_POST["login_eid"];
    
    
    if ($password==$cpassword){
        $sql = "INSERT INTO `employes` (`name`, `id`, `email`, `nid`, `phone`, `password`, `role`,`date`) VALUES ('$username', '$id', '$email', '$nid', '$phone', '$password','$role', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showalert = true;
        }
       
        
    }
    else{
        $showerror = true;
    }
    
}

?>

<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
    
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
        <!--
        <header>
            <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল</a>
        </header>
-->

        <main>

        <?php
        if($showalert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <h3><strong>Success!</strong> Employe account is now created and he/she can <a href="login.php"> login  </a>      
            </h3>            
        </div>';
        }
        if($showerror){
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h3><strong>Error!</strong> Please give the information properly  
            </h3>            
        </div>';
        }
        ?>
            <section class="vh-100 gradient-custom" style="background-image: url('login_bg-transformed.jpeg');">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                      <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                          <div class="mb-md-5 mt-md-4 pb-5">

                            <h1 style="color: #ff3838;"><strong>Signup</strong></h1>
                            <p class="text-black-50 mb-5" 
                                style="font-size: 15px;">
                                signup for employes 
                            </p>
                            
                            <form action="/370_NEW/sign.php" method="post">
                            
                            <div class="form-outline" style="margin-top: 25px;">
                                <input type="text" 
                                    id="login_name" 
                                    name = "login_name"
                                    class="form-control form-control-lg"
                                    placeholder="Name"
                                    required
                                />
                            </div>

                            <div class="form-outline" style="margin-top: 15px;">
                                <input type="text" 
                                    id="login_eid" 
                                    name = "login_eid" 
                                    class="form-control form-control-lg"
                                    placeholder="ID"
                                    required
                                />
                            </div>
                            
                            <div class="form-outline" style="margin-top: 15px;">
                                <input type="email" 
                                    id="login_email" 
                                    name = "login_email" 
                                    class="form-control form-control-lg"
                                    placeholder="Email Address"
                                    required
                                />
                            </div>
                            
                            <div class="form-outline" style="margin-top: 15px;">
                                <input type="text" 
                                    id="login_nid" 
                                    name = "login_nid" 
                                    class="form-control form-control-lg"
                                    placeholder="NID Number"
                                    required
                                />
                            </div>

                           

                            <div class="form-outline" style="margin-top: 15px;">
                                <input type="text" 
                                    id="login_phone" 
                                    name = "login_phone"
                                    class="form-control form-control-lg"
                                    placeholder="Phone Number"
                                    required
                                />
                            </div>
                            <div class="form-outline" style="margin-top: 15px;">
                                <input type="password" 
                                    id="login_password" 
                                    name = "login_password" 
                                    class="form-control form-control-lg"
                                    placeholder="Password"
                                    required
                                />
                            </div>
                            

                            <div class="form-outline" style="margin-top: 15px;">
                                <input type="password" 
                                    id="login_cpassword" 
                                    name = "login_cpassword" 
                                    class="form-control form-control-lg"
                                    placeholder="Confirm Password"
                                    required
                                />
                            </div>

                            <div class="form-outline" style="margin-top: 15px;">
                            
                                    <h3>Choose Your Role</p>
                                    <select name="role" id="role">
                                        <option>Chef</option>
                                        <option>Waiter</option>
                                        <option>Super Admin</option>
                                        
                                    </select>
                                    <br><br>

                            
                            </div>
                            
                            
                                <button 
                                class="btn" 
                                type="submit" 
                                style="margin-top: 50px;">
                                    Signup
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