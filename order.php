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
    <link rel="stylesheet" href="css/order.css">
    <STYle>
      
    </STYle>

</head>
<body>
    <!-- <div class="hopp"> -->
    <div class="header">
         <div class="logo" style="gap:290px;">
         <h1 style="font-size:33px;" ><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i> <a href="logout.php" style="color:black;font-size:30px;"> LOGOUT</a></h1>
        </div>
    </div>
    <div class="contact_me">
        <div class="formm" id="contactuss">
            <div class="contactme"  style="text-decoration: underline;"><h1>ORDER KNOW</h1></div>
            <form action="recive.php" method="post">
    
         <div class="name">
             <label for="name" class="wood">NAME</label><br>
             <input type="text " name="name" id="name" placeholder="NAME"  required>
         </div>
          
         <div class="age">
            <label for="age" class="wood">AGE</label><br>
            <input type="number" name="age" id="age" placeholder="AGE"  required>
        </div>
         
        <div class="number">
            <label for="number" class="wood">NUMBER</label><br>
            <input type="number " name="number" id="number" placeholder="NUMBER"  required>
        </div>
         
        <div class="ADDRESS">
            <label for="ADDRESS" class="ADDRESS">ADDRESS</label><br>
            <input type="ADDRESS" name="ADDRESS" id="ADDRESS" placeholder="ADDRESS"  required>
        </div>
         
        <div>
            <label for="selectro">MENU</label><br>
            <select name="select" id="selectro"  required>
                <option value="momes">MOMOS</option>
                <option value="FRIED RICE">FRIED RICE</option>
                <option value="PIZZA">PIZZA</option>
                <option value="BURGER">BURGER</option>
            </select><br>
        </div><br><br>
        <input type="submit" value="ORDER" name="create" id="create">
    
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