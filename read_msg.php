<?php include_once 'connection_chef.php'; ?>

<?php

if(isset($_GET['id']))
{
    $main_id=$_GET['id'];
    $sql_update= mysqli_query($con,"UPDATE order_waiter SET Status_w=1 WHERE Order_id='$main_id'");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Message</title>

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

    </header>
    <br><br><br><br><br><br><br><br><br>


    <div class="container mt-5">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><h3>Sl.No</h3></th>
                        <th scope="col"><h3>Order No</h3></th>
                        <th scope="col"><h3>Dish Name</h3></th>
                        <th scope="col"><h3>Time</h3></th>
                        <th scope="col"><h3>Delete</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sr_no=1;
                    
                    
                    $sql_get= mysqli_query($con,"SELECT * FROM order_waiter WHERE Status_w=1");

                    while($main_result=mysqli_fetch_assoc($sql_get)) :?>

                    <tr>
                        <th scope="row"><?php echo $sr_no++;    ?></th>
                        <td><?php echo $main_result['Order_no_w'];    ?></td>
                        <td><?php echo $main_result['Dish_name_w'];    ?></td>
                        <td><?php echo $main_result['Order_date_w'];    ?></td>
                        <td><a href="delete.php?id=<?php echo $main_result['Order_id'];  ?>" calss='text-danger'><b>Remove<b></a></td>
                    </tr>

                    <?php endwhile ?>

                </tbody>
            </table>




        </div>







    </div>


   

</body>

</html>