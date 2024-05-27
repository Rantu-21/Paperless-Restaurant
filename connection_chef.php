<?php

$con = mysqli_connect('localhost','root', '','370');

if($con)
{
    echo '';
}

else
{
    echo mysqli_error($con);
}




?>