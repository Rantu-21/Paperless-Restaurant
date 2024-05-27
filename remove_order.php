<?php 


include_once 'connection_chef.php'; 

if(isset($_GET['id']))
{
    $remove_id_c=$_GET['id'];

    $sql_remove_c= mysqli_query($con,"DELETE FROM order_chef WHERE Order_no ='$remove_id_c'");

    if($sql_remove_c)
    {
        header('location: read_order_chef.php');

    }
    else
    {
        echo mysqli_error($con);
    }
}



?>