<?php include_once 'connection_chef.php'?>
<?php

if(isset($_GET['id']))
{

    $readed_id = $_GET['id'];
    $sql_update = mysqli_query($con,"UPDATE order_chef SET status = 1 WHERE Order_no = '$readed_id' ");

}


?>




<!DOCTYPE html>
<html lang = "en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read order Chef Proflie</title>

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
    <h1 class="heading"> <span>Order</span> Details</h1>
        <div class="container" id = 'table_chef'>
            <div class="row"> 
            <table class="table ">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Order No.</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Table No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                <?php $sql_get1 = mysqli_query($con,"SELECT * FROM order_chef WHERE status =1");
                while ($final_result = mysqli_fetch_array($sql_get1 )) :?>
                    <tr>
                    <th scope="row"><?php echo $final_result['Order_no']?></th>
                    <td><?php echo $final_result['Dish_name'];?></td>
                    <td><?php echo $final_result['Quantity'];?></td>
                    <td><?php echo $final_result['Table_No'];?></td>
                    <td><?php echo $final_result['Order_date'];?></td>
                    <td><a href="remove_order.php?id=<?php echo $final_result['Order_no'];  ?>" calss='text-danger'>Remove Order</a></td>
                    </tr>
                <?php endwhile?>
                </tbody>
            </table>
            </div>
    </div>
    </body>

</html>