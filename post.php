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
    <link rel="stylesheet" href="css/ACCOUNT.CSS">
    <STYle>
      
    </STYle>

</head>
<body>
    <!-- <div class="hopp"> -->
    <div class="header">
         <div class="logo" style="gap:310px;">
         <h1 style="font-size:33px;"><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i> <a href="logout.php" style="color:black;font-size:30px;"> LOGOUT</a></h1>
        </div>
    </div>
    <div class="contact_me" style="height: 650px;">
        <div class="formm" id="contactuss" style="height: 650px;">
            <div class="contactme"  style="text-decoration: underline;"><h1 style="padding-top: 5px;margin-left: 140px;">POST</h1></div>
            <form action="recivepost.php" method="POST" enctype="multipart/form-data" style="height: 650px;">
    

           
        <div class="USERNAME">
            <label for="USERNAME" class="USERNAME">USERNAME</label><br>
            <input type="text" name="USERNAME" id="USERNAME" placeholder="USERNAME" required>
        </div>
          
     
          
         <div class="title">
            <label for="title" class="title">TITLE</label><br>
            <input type="text" name="title" id="title" placeholder="title" required>
        </div>
         
        <div class="img">
            <label for="img" class="img">IMG</label><br>
            <input type="file" name="images" style="margin-left: 70px;" required>
        </div>
         
      

          
        <div class="ADDRESS">
            <label for="ADDRESS" class="ADDRESS">ADDRESS</label>
            <input type="ADDRESS" name="ADDRESS" id="ADDRESS" placeholder="ADDRESS" required>
        </div>
         
        <div>
            <label for="selectro" style="margin-left: 130px;">CATEGORY</label><br>
            <select name="select" id="selectro" required>
                <option value="INDIAN">INDIAN</option>
                <option value="MAXSICAN">MAXSICAN</option>
                <option value="CHINESE">CHINESE</option>
                <option value="TURKEY">TURKEY</option>
            </select>
        </div>
        <div>
            <label for="description">DESCRIPTION</label><br>
            <textarea name="description" id="description" cols="51" rows="4"  required></textarea>
        </div><br>
        <input type="submit" value="POST" name="create" id="create" style="margin-top: 30px;">
    
            </form>
        </div>
   
 </div>

    <div id="KO">
        <div class="footer">
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
    <!-- </diSSSv> -->
    </body>
    </html>