<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}else {
    $ses = $_SESSION['username'];
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
         <div class="logo">
         <h1 style="margin-left:-400px;"><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <!-- <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i> <a href="logout.php" style="color:black;font-size:30px;"> LOGOUT</a></h1> -->
        </div>
    </div>
    <div class="contact_me">
        <div class="formm" id="contactuss">
            <div class="contactme"  style="text-decoration: underline;"><h1 style="padding-top: 5px;margin-left:120px;">UPDATE</h1></div>
            <form action="uaccount.php" method="post">
    

            <?php
              $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
              $sql2 = "SELECT * FROM account WHERE username = '{$ses}'";

              $rel = mysqli_query($conn,$sql2) or die("query failed");
              if(mysqli_num_rows($rel)){
                  
                while($row = mysqli_fetch_assoc($rel)){

              ?>
         <div class="name">
             <label for="name" class="wood">NAME</label><br>
             <input type="text " name="name" id="name" value="<?php  echo $row['aname']; ?>"  required>
         </div>

           
        <div class="USERNAME">
            <label for="USERNAME" class="USERNAME">USERNAME</label><br>
            <input type="text" name="USERNAME" id="USERNAME" value="<?php  echo $row['username']; ?>"  required>
        </div>
          
        <div class="PASSWORD">
            <label for="PASSWORD" class="PASSWORD">PASSWORD</label><br>
            <input type="text" name="PASSWORD" id="PASSWORD" value="<?php  echo $row['apassword']; ?>"  required>
        </div>
          
         <div class="age">
            <label for="age" class="wood">AGE</label><br>
            <input type="number" name="age" id="age" value="<?php  echo $row['age']; ?>"  required>
        </div>
         
        <div class="number">
            <label for="number" class="wood">NUMBER</label><br>
            <input type="number " name="number" id="number" value="<?php  echo $row['anumber']; ?>"  required>
        </div>
         
        <div class="email">
            <label for="email" class="email">email</label><br>
            <input type="email" name="email" id="email" value="<?php  echo $row['email']; ?>"  required>
        </div>

          
        <div class="ADDRESS">
            <label for="ADDRESS" class="ADDRESS">ADDRESS</label><br>
            <input type="ADDRESS" name="ADDRESS" id="ADDRESS" value="<?php  echo $row['aaddress']; ?>"  required>
        </div>
         
        <div>
            <label for="selectro">CITY</label><br>
            <select name="select" id="selectro"  required>
                <option value="DELHI">DELHI</option>
                <option value="JAIPUR">JAIPUR</option>
                <option value="AGRA">AGRA</option>
                <option value="GOA">GOA</option>
            </select>
        </div><br>
        <?php    
        }
    }
        
        ?>
        <input type="submit" value="PUDATE" name="create" id="create">
    
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