<?php
$conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

$username = $_POST['username'];
$password = $_POST['PASSWORD'];

$sql = "SELECT * FROM account WHERE username = '{$username}'AND apassword = '{$password}'";

$rel = mysqli_query($conn,$sql) or die("query failed");


if(mysqli_num_rows($rel) > 0){

if($row = mysqli_fetch_assoc($rel)){


    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['uusername'];
    $_SESSION['password'] = $row['upassword'];
    
     header("Location: front.php");

}


}else{
    echo "<h1 style='text-align:center;color:red;'>something wrong try again</h1>";
}

?>