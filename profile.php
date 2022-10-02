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
    <title>FOOD FACTORY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="css/PROFILE.CSS">
    <STYle>
      .footer{
          margin-bottom:600px;
      }
    </STYle>

</head>
<body style="height: 1290px;">
    <!-- <div class="hopp"> -->
    <div class="header">
         <div class="logo" style="gap:300px;">
         <h1><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i> <a href="logout.php" style="color:black;font-size:30px;margin-right:10px;"> LOGOUT</a></h1>
        </div>
    </div>
   <div class="onee" style="height: 1300px;">
    <label  class="labelo"  for="check" style="cursor:pointer;">
        <div class="toggle" style="cursor:pointer;">
            <div class="spinner one"></div>
            <div class="spinner two"></div>
            <div class="spinner three"></div>
        </div>
    </label>
  <div class="twoo" >
    <input type="checkbox" id="check" class="che" style="margin-top:50px;">
    <div class="sidebar" style="height:auto;">
     <ul style="height: 890px;">
         <li style="margin-top:50px;"><a href="front.php">HOME</a></li>
         <li><a href="changepic.php">SELECT PROFILEPIC</a></li>
         <li><a href="updatepic.php">UPDATE PROFILEPIC</a></li>
         <li><a href="updateprofile.php">UPDATE PROFILE</a></li>
         <li><a href="deleteprofile.php">DELETE PROFILE</a></li>
         <li><a href="selectbackground.php">SELECT BGROUND</a></li>
         <li><a href="updatefrofilebg.php">CHANGE BGROUND</a></li>
   
     </ul>
    </div>
  </div>


       <div class="threee" style="height: 1300px;">
        <div class="pcontent">
            <div class="backimg">
                <?php   
                  $connn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
                  $ci ="";
                  if(isset($_SESSION['username'])){

                    $ci = $_SESSION['username'];
                  }
                    $oppp = "SELECT * FROM changebackground WHERE username = '{$ci}'";
                    $quert = mysqli_query($connn,$oppp) or die("query failed");
                    if(mysqli_num_rows($quert) > 0){
                        while($voop = mysqli_fetch_assoc($quert)){
                
                  ?>
                <img src="backuploding/<?php echo $voop['backimg'];?>" alt="404">
                <?php 
                 } 
                }
                 ?>
            </div>
             <div class="profileim">
                 <?php 
                   
                
                 $opp = "SELECT * FROM changeimg WHERE username = '{$ci}'";
                 $quer = mysqli_query($connn,$opp) or die("query failed");
                 if(mysqli_num_rows($quer) > 0){
                     while($vip = mysqli_fetch_assoc($quer)){
                 ?>
                 <img src="uploding/<?php echo $vip['img'];?>" alt="404">
                 <?php 
                 } 
                }
                 ?>
             </div>
        
            </div>
            <?php
            $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
            // session_start();
            if(isset($_SESSION['username'])){

                $ci = $_SESSION['username'];
            }
            $sql = "SELECT * FROM account WHERE username = '{$ci}'";
            $resut = mysqli_query($conn,$sql) or die("query failed");
            if(mysqli_num_rows($resut) > 0){
                while($row = mysqli_fetch_assoc($resut)){
            ?>
            
            <DIV class="ABOUTPRO">ABOUT ME</DIV>
           <div class="aboutme">
               <div><b>NAME </b>: <?php echo $row['aname'];?></div>
               <div><b>USERNAME</b> : <?php echo $row['username'];?></div>
               <div><b>PASSWORD</b> : <?php echo $row['apassword'];?></div>
               <div><b>AGE</b> : <?php echo $row['age'];?></div>
               <div><b>CITY</b> : <?php echo $row['city'];?></div>
               <div><b>NUMBER</b> : <?php echo $row['anumber'];?></div>
               <div><b>GMAIL</b> : <?php echo $row['email'];?></div>
               <div><b>ADDRESS</b> : <?php echo $row['aaddress'];?></div>
           </div>
           <?php
                }
            }
           ?>
        
            <div id="KO" >
                <div class="footer" style="margin-bottom:12px;">
                    <div class="hea">
                        <H1 style="text-decoration: underline;">MADE BY AJAY</H1>
                    </div>
                    <div class="icon">
                    <div style="font-size:32px;font;font-weight: bold;"><?php if(isset($_SESSION['username'])){
                 echo "hello ". $_SESSION['username'];
            } ?></div>
                        <div class="topers"><i class="fa-brands fa-facebook-square"></i></div>
                        <div class="topers"><i class="fa-brands fa-instagram-square"></i></div>
                        <div class="topers"><i class="fa-brands fa-twitter-square"></i></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- </diSSSv> -->
    </body>
    </html>