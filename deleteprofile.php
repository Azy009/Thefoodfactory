<?php
$conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
$sql = "DELETE FROM account WHERE username = '{$username}'";
$rel = mysqli_query($conn,$sql) or die("query failed");

header("Location: index.php");
?>