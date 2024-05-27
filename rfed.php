<!DOCTYPE html>
<html>
<head>
<style>
 
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 15px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>
<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "370";

    $conn = mysqli_connect($server, $username, $password, $database);


    
    $a = array();
    $a1 = array();
    $t = mysqli_query($conn, "SELECT * FROM feedback ORDER BY s_no DESC LIMIT 5");
    while($t2 = mysqli_fetch_assoc($t)){
        array_push($a, $t2["name"]);
        array_push($a1, $t2["cfeedback"]);
    }
    $fir = $a[0];
    $sec = $a[1];
    $thi = $a[2];
    $fou = $a[3];
    $fiv = $a[4]; 

    $first_f = $a1[0];
    $second_f = $a1[1];
    $third_f = $a1[2];
    $four_f = $a1[3];
    $five_f = $a1[4]; 
  ?>
        
<h1><strong> Recent Feedbacks : </strong></h1>
<br><br>



<table> 
  <tr>
    <th><u>Name</u></th>
    <th><u>Feedback</u></th>
    
  </tr>
  <tr>
    <td><?php echo "<h4>" . $fir . "</h4>"; ?></td>
    <td><?php echo "<h4>" . $first_f . "</h4>"; ?></td>
    
  </tr>
  <tr>
    <td><?php echo "<h4>" . $sec . "</h4>"; ?></td>
    <td><?php echo "<h4>" . $second_f . "</h4>"; ?></td>
    
  </tr>
  <tr>
    <td><?php echo "<h4>" . $thi . "</h4>"; ?></td>
    <td><?php echo "<h4>" . $third_f . "</h4>"; ?></td>
    
  </tr>
  <tr>
    <td><?php echo "<h4>" . $fou . "</h4>"; ?></td>
    <td><?php echo "<h24>" . $four_f . "</h24>"; ?></td>
    
  </tr>
  <tr>
    <td><?php echo "<h4>" . $fiv . "</h4>"; ?></td>
    <td><?php echo "<h4>" . $five_f . "</h4>"; ?></td>
    
  </tr>
 
</table>

</html>

