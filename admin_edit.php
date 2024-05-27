<!DOCTYPE html>
<html lang = "en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

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
    <!-- <script src="js/profile.js"></script> -->

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
      crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
      crossorigin="anonymous">
    </script>
    
  </head>

  <body>

    <header>
      <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল</a>

      <nav class="navbar">
        <a href="admin_info.php">Info</a>
        <a href="admin_edit.php">Edit</a>
        <a href="index.php">Logout</a>
      </nav>

    </header>

    <main>

        <section>
            <h1 style="padding-top: 100px;">Add Employee</h1>
            <div>
                <form>
                    <div class="container py-5 h-100">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-4" style="border-radius: 1rem; padding: 8px;">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <p class="mb-0" style="font-size: 15px;">Full Name</p>
                                      </div>
                                      <div class="col-sm-9">
                                        <input style="font-size: 15px;" type="text" placeholder="Name" required>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <p class="mb-0" style="font-size: 15px;">NID</p>
                                      </div>
                                      <div class="col-sm-9">
                                        <input style="font-size: 15px;" type="text" placeholder="XXXXXXXXXXX" required>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <p class="mb-0" style="font-size: 15px;">Phone Number 1</p>
                                      </div>
                                      <div class="col-sm-9">
                                        <input style="font-size: 15px;" type="text" placeholder="+8801xxxxxxxxx" required>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0" style="font-size: 15px;">Phone Number 2</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <input style="font-size: 15px;" type="text" placeholder="+8801xxxxxxxxx">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0" style="font-size: 15px;">Phone Number 3</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <input style="font-size: 15px;" type="text" placeholder="+8801xxxxxxxxx">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0" style="font-size: 15px;">Employee Type:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <select style="font-size: 15px;">
                                                <option style="font-size: 15px;">Waiter</option>
                                                <option style="font-size: 15px;">Chef</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card mb-4" style="border-radius: 1rem;">
                                    <div class="card-body">
                                        <h2 class="card-title" style="color: #ff3838;">Waiter: </h2>
                                        <div class="row">
                                            <div class="col-sm-3">
                                              <p class="mb-0" style="font-size: 15px;">Table Assigned:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <select style="font-size: 15px;">
                                                    <option style="font-size: 15px;">t01</option>
                                                    <option style="font-size: 15px;">t02</option>
                                                    <option style="font-size: 15px;">t03</option>
                                                    <option style="font-size: 15px;">t04</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card mb-4" style="border-radius: 1rem;">
                                    <div class="card-body">
                                        <h2 class="card-title" style="color: #ff3838;">Chef: </h2>
                                        <div class="row">
                                            <div class="col-sm-3">
                                              <p class="mb-0" style="font-size: 15px;">Dish Assigned:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <select style="font-size: 15px;">
                                                    <option style="font-size: 15px;">d01</option>
                                                    <option style="font-size: 15px;">d02</option>
                                                    <option style="font-size: 15px;">d03</option>
                                                    <option style="font-size: 15px;">d04</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn" type="submit">Submit</button>

                    </div>
                </form>
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

  </body>

</html>