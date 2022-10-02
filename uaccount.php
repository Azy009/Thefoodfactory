<?php

$conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
 session_start();
 if(isset($_SESSION['username'])){
     $son = $_SESSION['username'];
 }
$name = $_POST['name'];
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];
$age = $_POST['age'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['ADDRESS'];
$select = $_POST['select'];



 echo $sql = "UPDATE account SET aname ='{$name}',username = '{$username}',apassword = '{$password}',age = '{$age}',anumber = '{$number}',email = '{$email}',aaddress = '{$address}',city = '{$select}'WHERE username = '{$son}'";

$query = mysqli_query($conn,$sql) or die("query failed");



header("Location: profile.php");

 ?>