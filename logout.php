<?php
 $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

 session_start();
 $var = $_SESSION['username'];
 $sql = "SELECT * FROM account WHERE username = '{$var}'";
 $resut = mysqli_query($conn,$sql) or die("query failed");
 if(mysqli_num_rows($resut) > 0){


    session_unset();
   
    session_destroy();
   
    header("Location: login.php");
   
 }
 ?>
