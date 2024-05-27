<?php 


include_once 'connection_chef.php'; 

if(isset($_GET['id']))
{
    $delete_id=$_GET['id'];

    $sql_delete= mysqli_query($con,"DELETE FROM order_waiter WHERE Order_id='$delete_id'");

    if($sql_delete)
    {
        header('location: read_msg.php');

    }
    else
    {
        echo mysqli_error($con);
    }
}



?>