<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login">
        <div class="heading">FOOD FACTORY</div>
        <div class="backimage">
            <img src="img/img1 (3).jpg" alt="">
        </div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="vip">LOGIN</div>
            <div class="USERNAME">
                <label for="username">USERNAME</label><br>
                 <input type="text" name="username" id="username" required>
            </div><br>
            <div class="PASSWORD">
                <label for="PASSWORD">PASSWORD</label><br>
                 <input type="text" name="PASSWORD" id="PASSWORD" required>
            </div><br>
            <input type="submit" value="LOGIN" name="login" id="login">

        </form>
        
    </div>
    <button id="OOP"><a href="account.php" id="OP">CREATE ACCOUNT</a></button>
    <?php
    if(isset($_POST['login'])){
        $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

$username = $_POST['username'];
$password = $_POST['PASSWORD'];

$sql = "SELECT * FROM account WHERE username = '{$username}' AND apassword = '{$password}'";

$rel = mysqli_query($conn,$sql) or die("query failed");


if(mysqli_num_rows($rel) > 0){

while($row = mysqli_fetch_assoc($rel)){


    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['apassword'];
    
     header("Location: front.php");

  }
  }else{
    echo "<h1 style='text-align:center;color:red;margin-top:-100px;'>something wrong try again</h1>";
  }
   }
    
   ?>
</body>
</html>