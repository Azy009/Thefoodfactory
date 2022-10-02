<?php

$conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

$name = $_POST['name'];
$age = $_POST['age'];
$number = $_POST['number'];
$problem = $_POST['plm'];


 $sql = "INSERT INTO contactme(name,age,cnumber,problem) VALUES('{$name}',{$age},'{$number}','{$problem}')";

$query = mysqli_query($conn,$sql) or die("query failed");



header("Location: front.php");


?>