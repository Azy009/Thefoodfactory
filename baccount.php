<?php

$conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

$name = $_POST['name'];
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];
$age = $_POST['age'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['ADDRESS'];
$select = $_POST['select'];


$sql2 = "SELECT * FROM account WHERE username = '{$username}'";
$rel = mysqli_query($conn,$sql2) or die("query failed");

 if(mysqli_num_rows($rel) > 0){
   echo "<h1>please pick uniqe username</h1>";
 }else{

  $sql = "INSERT INTO account(aname,username,apassword,age,anumber,email,aaddress,city) VALUES('{$name}','{$username}','{$password}',{$age},{$number},'{$email}','{$address}','{$select}')";

$query = mysqli_query($conn,$sql) or die("query failed");



header("Location: front.php");

 }


?>