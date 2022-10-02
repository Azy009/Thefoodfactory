<?php

$conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

$name = $_POST['name'];
$age = $_POST['age'];
$number = $_POST['number'];
$address = $_POST['ADDRESS'];
$select = $_POST['select'];


 $sql = "INSERT INTO recive(name,age,rnumber,address,rorder) VALUES('{$name}',{$age},'{$number}','{$address}','{$select}')";

$query = mysqli_query($conn,$sql) or die("query failed");



header("Location: front.php");


?>