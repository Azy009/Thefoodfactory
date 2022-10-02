<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="css/PROFILE.CSS">
    <STYle>
      
    </STYle>

</head>
<body>
    <!-- <div class="hopp"> -->
    <div class="header">
         <div class="logo">
         <h1><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</h1>
        </div>
    </div>
   <div class="onee">
    <label  class="labelo"  for="check" style="cursor:pointer;">
        <div class="toggle" style="cursor:pointer;">
            <div class="spinner one"></div>
            <div class="spinner two"></div>
            <div class="spinner three"></div>
        </div>
    </label>
  <div class="twoo">
    <input type="checkbox" id="check" class="che">
    <div class="sidebar">
     <ul>
         <li><a href="">HOME</a></li>
         <li><a href="">CHANGE PROFILE</a></li>
         <li><a href="">UPDATE PROFILE</a></li>
         <li><a href="">DELETE PROFILE</a></li>
         <li><a href="">CHANGE BGROUND</a></li>
         
     </ul>
    </div>
  </div>
      
    <div class="change" style="width: 400px;height:170px;background-color:teal;margin:160px 0px 0px 400px;">
        <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="change">
            <label for="imgsss"style="text-align:center;margin-left:50px;font-size:32px;padding-bottom:7px;">UPDATE PROFILEPIC</label><br>
            <input type="file" name="filess" id="imgsss" style="margin-left:50px;font-size:25px; padding-top:20px;">
        </div><br>
        <input type="submit" name="submit" value="CHANGE" style="width:130px;font-size:23px;margin-left:120px;">
        </form>
    </div>

            <div id="KO" style="width:100%;position:absolute;bottom:0px;">
                <div class="footer">
                    <div class="hea">
                        <H1 style="text-decoration: underline;">MADE BY AJAY</H1>
                    </div>
                    <div class="icon">
                    <div style="font-size:32px;font;font-weight: bold;"><?php echo "hello ". $_SESSION['username'];?></div>
                        <div class="topers"><i class="fa-brands fa-facebook-square"></i></div>
                        <div class="topers"><i class="fa-brands fa-instagram-square"></i></div>
                        <div class="topers"><i class="fa-brands fa-twitter-square"></i></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
   <?php
  if(isset($_POST['submit'])){
    $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");

    if(isset($_FILES['filess'])){

        $name = $_FILES['filess']['name'];
        $tem = $_FILES['filess']['tmp_name'];
        $size = $_FILES['filess']['size'];
        $type = $_FILES['filess']['type'];

        if(isset($_SESSION['username'])){
            $abc = $_SESSION['username'];
        }
        move_uploaded_file($tem,"uploding/".$name);
    }
//    if(isset($_SESSION['username'])){
     
//    }
    $sqlo = "UPDATE changebackground SET username = '{$abc}',backimg = '{$name}'WHERE username = '{$abc}'";
   $rel = mysqli_query($conn,$sqlo) or die("query failed");
   header("Location: profile.php");
  }
   ?>
    <!-- </diSSSv> -->
    </body>
    </html>