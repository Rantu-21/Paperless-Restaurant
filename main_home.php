login.html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Home</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল</a>
    </header>
    <style>
        body {
            background-image: url(bg-1.png);
        }
    </style>

    <main>

        <section class="vh-100 gradient-custom" style="background-image: url('login_bg-transformed.jpeg');">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">




                                    <button class="btn" type="submit" style="margin-top: 50px;">
                                        <a href="login.php" style="color:#ff3838;">Administritive View</a>
                                    </button>
                                    <button class="btn" type="submit" style="margin-top: 50px; margin-left: 15px;">
                                        <a href="index.php" style="color:#ff3838;">Customer View</a>
                                    </button><br><br><br><br>
                                    <div class="container">
                                        <h3>*if you are from Administrative, select <b>Administritive View</b><br>
                                            *if you are a customer, select <b>Customer View</b></h3>
                                    </div>


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
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>