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
    <link rel="stylesheet" href="css/front.css">
    <style>
        .owl-carousel{
    width: 99vw;
}
.slider-img{
    width: 99vw;
}
.owl-item{
    width: 99vw;
}
.owl-stage{
    width: 99vw;
}
.owl-stage-outer{
    width: 99vw;
    overflow-x: hidden;
    height: 460px;
}
    </style>
</head>
<body>
    <!-- <div class="hopp"> -->
    <div class="header">
         <div class="logo" style="gap:290px;">
         <h1><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i> <a href="logout.php" style="color:black;font-size:30px;"> LOGOUT</a></h1>
        </div>
    </div>
    <label  class="labelo"  for="check" style="cursor:pointer;">
        <div class="toggle" style="cursor:pointer;">
            <div class="spinner one" style="cursor:pointer;"></div>
            <div class="spinner two" style="cursor:pointer;"></div>
            <div class="spinner three" style="cursor:pointer;"></div>
        </div>
    </label>
    <div class="content1">
        <input type="checkbox" id="check" class="che">
        <div class="sidebar">
         <ul>
             <li><a href="">HOME</a></li>
             <li><a href="">INDIAN</a></li>
             <li><a href="">MAXSICAN</a></li>
             <li><a href="">CHINESE</a></li>
             <li><a href="">SEAFOOD</a></li>
             <li><a href="">MEAT</a></li>
             <li><a href="">BAKED</a></li>
             <li><a href="">COOKIES</a></li>
             <li><a href="">STREET </a></li>
         </ul>
        </div>
        <div class="content2">
            <div class="menu">
                <ul>
                    <li><a href="front.php">HOME</a></li>

                    <?php
                    if($_SESSION['username']== "Ajay007"){

                    ?>
                    <li><a href="vip.php">VIP</a></li>
                    <?php  } ?>
                    <li><a href="order.php">ORDER</a></li>
                    <li><a href="profile.php">PORFILE</a></li>
                    <li><a href="account.php">ACCOUNT</a></li>
                    <li><a href="post.php">POST</a></li>
                    <li><a href="#aboutme">ABOUT</a></li>
                    <li><a href="#contactuss">CONTACT</a></li>
                </ul>
            </div>
            <div class="slider-img">
                <div class="red owl-carousel owl-theme">
                    <div class="item laders"><img src="IMG/img (8).jpg" alt=""></div>
                    <div class="item laders"><img src="IMG/img (2).jpg" alt="" > </div>
                    <div class="item laders"> <img src="IMG/img (3).jpg" alt=""></div>
                    <div class="item laders"> <img src="IMG/img (4).jpg" alt=""></div>
                    <div class="item laders"> <img src="IMG/img (5).jpg" alt=""></div>
                    <div class="item laders"> <img src="IMG/img (6).jpg" alt=""></div>
                    <div class="item laders"> <img src="IMG/img (7).jpg" alt=""></div>
                    <div class="item laders"> <img src="IMG/img (8).jpg" ralt=""></div>
                    <div class="item laders"> <img src="IMG/img (2).jpg" ralt=""></div>
                    <div class="item laders"><img src="IMG/img (3).jpg" alt=""> </div>
                    <div class="item laders"> <img src="IMG/img (4).jpg" alt=""></div>
                    <div class="item laders"> <img src="IMG/img (5).jpg" alt=""></div>
                </div>
            </div>
            <div class="section">
                <div class="section2" style="height: 900px;" >
                    <div class="post"> <H1> POST</H1></div>
                    <?php    
                     $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
                     $searchtxt = "";
                      if(isset($_GET['submit'])){
                        $searchtxt = $_GET['search'];
                      }
                    
                      if(isset($_GET['submit'])){
                          $searchtxt = $_GET['search'];
                      }
                    
                     if(isset($_GET['id'])){
                         $id = $_GET['id'];
                     }else{
                         $id = 1;
                     }
                     $limit = 2;
                     $offset = ($id - 1) * $limit;
                     $sql = "SELECT * FROM posts WHERE title LIKE '%{$searchtxt}%' ORDER BY ID DESC LIMIT {$offset},{$limit}";
                     $rel = mysqli_query($conn,$sql) or die("query failed");
                     if(mysqli_num_rows($rel) > 0){

                     while($row = mysqli_fetch_assoc($rel)){
                    ?>
                    <div class="contain1" style="height: 900px;">
                     <div class="img">
                         <img src="postuploding/<?php echo $row['img']; ?>" alt="">
                     </div>
                     <div class="info">
                         <div class="username">
                             <h3><i class="fa-solid fa-user"></i><?php echo $row['pusername']; ?>, </h3>
                         </div>
                         <div class="category">
                            <h3><i class="fa-solid fa-bowl-food"></i><?php echo $row['pselect']; ?>, </h3>
                         </div>
                         <div class="date">
                             <h3><i class="fa-solid fa-calendar-days"></i><?php echo $row['pdate']; ?></h3>
                         </div>
                     </div>
                     <div class="title">
                         <h2><?php echo $row['title']; ?></h2>
                     </div>
                     <div class="desc">
                         <p><?php echo $row['pdescription']; ?></p>
                     </div>
                     <div class="butm">
                    <input type="button" value="read more" id="but">
                     </div>
                </div>
                <?php
                   }
                 }
                
                ?>
                <div class="list">
                  
                        <?php
                      
                      $vop = "SELECT * FROM posts WHERE title LIKE '%{$searchtxt}%'";
                      $req = mysqli_query($conn,$vop) or die("2 query failed");
                      if(mysqli_num_rows($req) > 0){
                        echo "<ul>";
                        $total = mysqli_num_rows($req);
                       
                        $total_page = ceil($total / $limit);
                         if($id > 1){
                            echo '<li class="select"><a class="select" href="search.php?id='.($id - 1).'"><i class="fa-solid fa-angle-left"></i></a></li>';
                        }
                       for($a = 1;$a <= $total_page;$a++){
                                          if($a == $id){
                                              $pageid = "select";
                                          }else{
                                              $pageid = "";
                                          }
                        echo '<li class="'.$pageid.'" ><a  href="search.php?id='.$a.'">'. $a .'</a></li>';   
                    }
                   if($total_page > $id){
                    echo '<li class="select" ><a class="select" href="search.php?id='.($id + 1).'"><i class="fa-solid fa-angle-right"></i></a></li>';
                   }
                    }
                    echo "</ul>";
                      ?>
                </div>
                </div>
                <div class="section3">
                   <div class="from">
                       <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="get">
                        <div>
                            <input type="search" id="search" name="search" placeholder="Search posts">
                            <label for="submit"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="submit" name="submit" id="submit" class="submit1">
                        </div>
                       </form>
                   </div>
                  
                   <div class="dis" id="aboutme">
                       <div class="heading">
                           <H1>ABOUT US</H1>
                       </div>
                       <div class="aboutname">NAME : FOOD FACTORY</div>
                       <div class="aboutCATEGORY">CATEGORY : ALL TYPE</div>
                       <div class="aboutOWNER">OWNER : SALMAN KHAN</div>
                       <div class="aboutORDER">ORDER STARTS : 400 RS</div>
                       <div class="aboutNUMBER">NUMBER : 5969584373</div>
                       <div class="aboutADDRESS">ADDRESS : Rz -58 uttam nagar dwarka</div>



                   </div>
                </div>
            </div>

             <div class="area">
                <div class="contact_me">
                    <div class="formm" id="contactuss">
                        <form action="contact.php" method="post">
                            <div class="contact-me"  style="text-decoration: underline;"><h1>CONTACT ME</h1></div>
                     <div class="name">
                         <label for="name" class="wood">NAME</label><br>
                         <input type="text " name="name" id="name" placeholder="name"  required>
                     </div>
                      
                     <div class="age">
                        <label for="age" class="wood">AGE</label><br>
                        <input type="number" name="age" id="age" placeholder="age"  required>
                    </div>
                     
                    <div class="number">
                        <label for="number" class="wood">NUMBER</label><br>
                        <input type="number " name="number" id="number" placeholder="number" required>
                    </div>
                     
                    <div class="plm">
                        <label for="plm" class="wood">PROBLEM</label><br>
                    <textarea name="plm" id="plm" cols="54" rows="3" placeholder="ENTER YOUR PROBLEM" required></textarea>
                    </div>
                    <input type="submit" value="Sand" name="create" id="create">
                
                        </form>
                    </div>
               
             </div>

             </div>
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
    </div>
<!-- </div> -->

<div class="ggo">
    <pre id="KI">
           
    </pre>
</div>
<div class="ggooo">
    <pre id="KI">
           
    </pre>
</div>
<div class="ggoo">
    <pre id="KI">
           
    </pre>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function(){
            $('.red').owlCarousel({
                items:1,
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000

  
});
        })
    </script>
</body>
</html>