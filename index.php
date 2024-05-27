<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "370";

    $conn = mysqli_connect($server, $username, $password, $database);
    $dishname = $_POST["dish"];
    $quantity = $_POST["quantity"];
    $table = $_POST["table"];

   
        
        $sql = "INSERT INTO `order` (`dishname`, `quantity`, `t_no`, `date`) VALUES ('$dishname', '$quantity', '$table', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        $sql_insert = mysqli_query($conn,"INSERT INTO `order_chef` (`Dish_name`, `Quantity`, `Table_No`, `status`, `Order_date`) VALUES ('$dishname', '$quantity', '$table', '0', current_timestamp())");
        

    $sql1 = "SELECT * FROM trending WHERE dishname = '$dishname'";
    $result1 = mysqli_query($conn, $sql1);
    if($result1){
        $sql2 = "UPDATE trending SET ocount=ocount+$quantity WHERE dishname='$dishname'";
        $res2 = mysqli_query($conn, $sql2);
    } 
    else {
         $sql3 = "INSERT INTO `trending` (`dishname`, `ocount`) VALUES ('$dishname', '1')";
         $res3 = mysqli_query($conn, $sql3);
    } 
    
    
       
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>370-Resturant Project </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>মায়ের দোয়া হোটেল</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#popular">Trending Now</a>
            <a href="#gallery">Menu</a>
            
            <a href="#order">Order</a>
            <a href="feedback.php">Feedback</a>
            
            <a
                href="https://www.google.com/maps/place/Mayer+Doa+Hotel+%26+Restaurant/@23.8738926,90.3784466,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c59400ff7257:0x173a097c51410120!8m2!3d23.8739809!4d90.3806318">Location</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- Mayer Doa Template  -->

    <br>


    <br>

    i
    

    <div class="container">
        <img src="mayerdoa.PNG" class="center">

    </div>




    <!-- Trending Now section starts  -->
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "370";

    $conn = mysqli_connect($server, $username, $password, $database);
    
    $a = array();
    $a1 = array('Double Decker' => 'p-1.jpg', 'BBQ Beef Burger' => 'g-1.jpg', 'Sandwich' => 'g-2.jpg', 'Chicken Swarma' => 'g-3.jpg', 'Cupcakes'=>'g-4.jpg','Swandesh'=>'g-5.jpg','Chicken Fries'=>'g-6.jpg','Fried Egg Toast'=>'g-7.jpg','Chocolates'=>'g-8.jpg', 'Plain Cakes'=>'g-9.jpg','Sweets and DryFoods'=>'p-3.jpg', 'Mangocakes'=>'p-4.jpg', 'White Forest'=>'p-2.jpg', 'Ice Creams'=>'p-6.jpg', 'Bevarages'=>'p-5.jpg');

    $a2 = array('Double Decker' => '210', 'BBQ Beef Burger' => '260', 'Sandwich' => '160', 'Chicken Swarma' => '190', 'Cupcakes'=>'60','Swandesh'=>'210','Chicken Fries'=>'230','Fried Egg Toast'=>'150','Chocolates'=>'80', 'Plain Cakes'=>'135','Sweets and DryFoods'=>'50', 'Mangocakes'=>'80', 'White Forest'=>'450', 'Ice Creams'=>'90', 'Bevarages'=>'40');
    $t = mysqli_query($conn, "SELECT * FROM trending ORDER BY ocount DESC LIMIT 3");
    while($t2 = mysqli_fetch_assoc($t)){
        array_push($a, $t2["dishname"]);
    }
    $first = $a[0];
    $second = $a[1];
    $third = $a[2];
    ?>
        
     
    

    <section class="popular" id="popular">

        <h1 class="heading"><span>Trending Now</span></h1>

        <div class="box-container">

            <div class="box">
                <span class="price"> Price-<?php echo $a2[$first];  ?> Tk </span>
                <img src= "<?php echo $a1[$first];  ?>" alt="">
                <h3> <?php echo $first ?></h3> 
                

                <a href="#order" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">Price-<?php echo $a2[$second];  ?> Tk </span>
                <img src= "<?php echo $a1[$second];  ?>" alt="">
                <h3> <?php echo $second ?></h3> 
                <a href="#order" class="btn">ordern now</a>
            </div>


            <div class="box">
                <span class="price"> Price-<?php echo $a2[$third];  ?>Tk </span>
                <img src= "<?php echo $a1[$third];  ?>" alt="">
                <h3> <?php echo $third ?></h3> 

                <a href="#order" class="btn">ordern now</a>
            </div>

        </div>

    </section>
   
    

    <!-- Trending Now section ends -->

    <!-- Menu section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading"> <span> Menu </span> </h1>

        <div class="box-container">
            <div class="box">
                <img src="p-1.jpg" alt="">
                <div class="content">
                    <h3>Double Decker</h3>
                    <p>Double Chicken Patties sandwitched with chedder and mozzarella cheese and briunche bun.  <b>TK-210</b></p>
                    
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>

            <div class="box">
                <img src="g-1.jpg" alt="">
                <div class="content">
                    <h3>BBQ Beef Burger</h3>
                    <p>Crispy white meat breast fillet topped with marinara sauce and melty Mozzarella cheese on a
                        toasted potato bun.  <b>TK-260</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-2.jpg" alt="">
                <div class="content">
                    <h3>Sandwich</h3>
                    <p>Lightly breaded chicken topped with crisp lettuce and creamy mayonnaise on a sesame seed bun. <b>TK-160</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-3.jpg" alt="">
                <div class="content">
                    <h3>Chicken Swarma</h3>
                    <p>Roasted thin slices of marinated chicken served with pickled cucumber, tomato and garlic sauce.
                        Contains gluten from wheat..  <b>TK-190</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-4.jpg" alt="">
                <div class="content">
                    <h3>Cupcakes</h3>
                    <p>Made with fertilized cream .   <b>TK-60 ps</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-5.jpg" alt="">
                <div class="content">
                    <h3>Swandesh</h3>
                    <p>Made with pure milk and care... <b>TK-210 per kg</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-6.jpg" alt="">
                <div class="content">
                    <h3>Chicken Fries</h3>
                    <p>Breaded, crispy white meat chicken perfect for dipping in any of our delicious dipping sauces..  <b>TK-230</b>
                    </p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-7.jpg" alt="">
                <div class="content">
                    <h3>Fried Egg Toast</h3>
                    <p>Fried eggs gurnished with spice and toasted bread.....<b>TK-150</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-8.jpg" alt="">
                <div class="content">
                    <h3>Chocolates</h3>
                    <p><b>TK-80 per pcs</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="g-9.jpg" alt="">
                <div class="content">
                    <h3>Plain Cakes </h3>
                    <p><b>TK-135 per box</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>

            <div class="box">
                <img src="p-3.jpg" alt="">
                <div class="content">
                    <h3>Sweets and DryFoods</h3>
                    <p><b>TK-50 per box</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>

            <div class="box">
                <img src="p-4.jpg" alt="">
                <div class="content">
                    <h3>Mangocakes </h3>
                    <p><b>TK-80 per pcs</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>

            <div class="box">
                <img src="p-2.jpg" alt="">
                <div class="content">
                    <h3>White Forest</h3>
                    <p><b>TK-450 per pcs</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="p-6.jpg" alt="">
                <div class="content">
                    <h3>Ice Creams</h3>
                    <p><b>TK-90 per scoop</b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>
            <div class="box">
                <img src="p-5.jpg" alt="">
                <div class="content">
                    <h3>Bevarages</h3>
                    <p><b>TK-40 </b></p>
                    <a href="#order" class="btn">ordern now</a>
                </div>
            </div>


        </div>

    </section>

    <!-- gallery section ends -->



    <!-- order section starts  -->

    <section class="order" id="order">

        <h1 class="heading"> <span>order</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="order-img.jpg" alt="">
            </div>

            <form action="/370_NEW/index.php" method="post">
                    
                        <h2>Choose Your Dish</h2>
                        <select name="dish" id="dish">
                            <option>Double Decker</option>
                            <option>BBQ Chicken Burger</option>
                            <option>Sandwich</option>
                            <option>Chicken Swarma</option>
                            <option>Swandesh</option>
                            <option>Chicken Fries</option>
                            <option>Omletes</option>
                            <option>White Forest</option>
                            <option>Chocolates</option>
                            <option>Cupcakes</option>
                            <option>Ice Creams</option>
                            <option>Bevarages</option>

                        </select>
                        <br><br>

                    

                



                <h2>Quantity</h2>
                <div class="inputBox">
                    <input type="number" min="1" value="1" placeholder="Quantity" id="quantity" name="quantity">
                </div>

                

                
                <h2>Your Table Number</h2>
                <div class="inputBox">
                    <input type="number" min="1" value="1" placeholder="Quantity" id="t_no" name="table">
                </div>


                    <button 
                                class="btn" 
                                type="submit" 
                                style="margin-top: 15px;">
                                    Order now
                                </button>
            </form>

        </div>

    </section>

    <!-- order section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="btn">facebook</a>

            <a href="#" class="btn">instagram</a>

        </div>

        <h1 class="credit"> created by <span> CSE-370 G-06 Members </span> </h1>

    </section>


