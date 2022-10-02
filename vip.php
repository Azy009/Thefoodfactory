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
    <link rel="stylesheet" href="css/vip.CSS">
</head>
<body>
    <!-- <div class="hopp"> -->
    <div class="header">
         <div class="logo" style="gap:290px;">
         <h1><i class="fa-solid fa-utensils"></i>FOOD FACTORY</h1>
         <h1 id="logout"><i class="fa-solid fa-right-from-bracket"></i> <a href="logout.php" style="color:black;font-size:30px;"> LOGOUT</a></h1>
        </div>
    </div>
    <div class="usera">USERS ACCOUNTS</div>
     <div class="result">
         <table border="1" cellspacing="0px" cellpadding="25px">
            <tr>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>AGE</th>
                <th>NUMBER</th>
                <th>GMAIL</th>
                <th>CITY</th>
                <th>ADDRESS</th>
            </tr>
            <?php
            $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
             if(isset($_GET['aid'])){
                 $id = $_GET['aid'];
             }else{
                 $id = 1;
             }
             $limit = 3;
             $offset = ($id - 1) * $limit;
            $sql = "SELECT * FROM account LIMIT {$offset},{$limit}";
            $resut = mysqli_query($conn,$sql) or die("query failed");
            if(mysqli_num_rows($resut) > 0){
                while($row = mysqli_fetch_assoc($resut)){
            ?>
            <tr>
                <td><?php echo $row['aname'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['apassword'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['anumber'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['aaddress'];?></td>
                 
            </tr>
            <?php
              }
         }
            ?>
         </table>
     </div>
     <div class="list">
     <?php
                      
                      $vop = "SELECT * FROM account";
                      $req = mysqli_query($conn,$vop) or die("2 query failed");
                      if(mysqli_num_rows($req) > 0){
                        echo "<ul>";
                        $total = mysqli_num_rows($req);
                     
                        $total_page = ceil($total / $limit);
                        if($id > 1){
                            echo '<li class="select"><a class="select" href="vip.php?aid='.($id - 1).'"><i class="fa-solid fa-angle-left"></i></a></li>';
                        }
                       for($a = 1;$a <= $total_page;$a++){
                                          if($a == $id){
                                              $pageid = "select";
                                          }else{
                                              $pageid = "";
                                          }
                                          $vari = $a;
                        echo '<li class="'.$pageid.'" ><a  href="vip.php?aid='.$a.'">'. $a .'</a></li>';   
                    }
                    if($total_page > $id){
                        echo '<li class="select" ><a class="select" href="vip.php?aid='.($id + 1).'"><i class="fa-solid fa-angle-right"></i></a></li>';
                    }
                    }
                    echo "</ul>";
                      ?>
    </div>
     
    <div class="usera">POSTS</div>
     <div class="result">
         <table border="1" cellspacing="0px" cellpadding="25px">
            <tr>
                <th>USERNAME</th>
                <th>DATE</th>
                <th>CATEGORY</th>
                <th>TITLE</th>
                <th>IMG</th>
                <th>ADDRESS</th>
                <th>DESCRIPTION</th>
            </tr>
            <?php
            $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
             $limit = 3;
             $offseot = ($id - 1) * $limit;
            $sql = "SELECT * FROM posts LIMIT {$offseot},{$limit}";
            $resut = mysqli_query($conn,$sql) or die("query failed");
            if(mysqli_num_rows($resut) > 0){
                while($row = mysqli_fetch_assoc($resut)){
            ?>
            <tr>
              
                <td><?php echo $row['pusername'];?></td>
                <td><?php echo $row['pdate'];?></td>
                <td><?php echo $row['pselect'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['img'];?></td>
                <td><?php echo $row['paddress'];?></td>
                <td><?php echo $row['pdescription'];?></td>
                 
            </tr>
            <?php
              }
         }
            ?>
         </table>
     </div>
     <div class="list">
     <?php
                      
                      $vop = "SELECT * FROM posts";
                      $req = mysqli_query($conn,$vop) or die("2 query failed");
                      if(mysqli_num_rows($req) > 0){
                        echo "<ul>";
                        $total = mysqli_num_rows($req);
                     
                        $total_page = ceil($total / $limit);
                        if($id > 1){
                            echo '<li class="select"><a class="select" href="vip.php?id='.($id - 1).'&aid='.$vari.'"><i class="fa-solid fa-angle-left"></i></a></li>';
                        }
                       for($a = 1;$a <= $total_page;$a++){
                                          if($a == $id){
                                              $pageid = "select";
                                          }else{
                                              $pageid = "";
                                          }
                        echo '<li class="'.$pageid.'" ><a  href="vip.php?id='.$a.'">'. $a .'</a></li>';   
                    }
                    if($total_page > $id){
                        echo '<li class="select" ><a class="select" href="vip.php?id='.($id + 1).'"><i class="fa-solid fa-angle-right"></i></a></li>';
                    }
                    }
                    echo "</ul>";
                      ?>
    </div>
      
    <div class="usera">ORDER</div>
     <div class="result" style="margin-left:300px;">
         <table border="1" cellspacing="0px" cellpadding="25px">
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>NUMBER</th>
                <th>ORDER</th>
                <!-- <th>IMG</th> -->
                <th>ADDRESS</th>
                <!-- <th>DESCRIPTION</th> -->
            </tr>
            <?php
            $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
             $limit = 3;
             $offse = ($id - 1) * $limit;
            $sql = "SELECT * FROM recive LIMIT {$offse},{$limit}";
            $resut = mysqli_query($conn,$sql) or die("query failed");
            if(mysqli_num_rows($resut) > 0){
                while($row = mysqli_fetch_assoc($resut)){
            ?>
            <tr>
              
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['rnumber'];?></td>
                <td><?php echo $row['rorder'];?></td>
                <td><?php echo $row['address'];?></td>
                 
            </tr>
            <?php
              }
         }
            ?>
         </table>
     </div>
     <div class="list">
     <?php
                      
                      $vop = "SELECT * FROM recive";
                      $req = mysqli_query($conn,$vop) or die("2 query failed");
                      if(mysqli_num_rows($req) > 0){
                        echo "<ul>";
                        $total = mysqli_num_rows($req);
                     
                        $total_page = ceil($total / $limit);
                        if($id > 1){
                            echo '<li class="select"><a class="select" href="vip.php?id='.($id - 1).'"><i class="fa-solid fa-angle-left"></i></a></li>';
                        }
                       for($a = 1;$a <= $total_page;$a++){
                                          if($a == $id){
                                              $pageid = "select";
                                          }else{
                                              $pageid = "";
                                          }
                        echo '<li class="'.$pageid.'" ><a  href="vip.php?id='.$a.'">'. $a .'</a></li>';   
                    }
                    if($total_page > $id){
                        echo '<li class="select" ><a class="select" href="vip.php?id='.($id + 1).'"><i class="fa-solid fa-angle-right"></i></a></li>';
                    }
                    }
                    echo "</ul>";
                      ?>
    </div>
    <div class="usera">COMMENTS</div>
     <div class="result" style="margin-left:100px;">
         <table border="1" cellspacing="0px" cellpadding="25px">
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>NUMBER</th>
                <th>COMMENTS</th>
                <!-- <th>IMG</th> -->
                <!-- <th>ADDRESS</th> -->
                <!-- <th>DESCRIPTION</th> -->
            </tr>
            <?php
            $conn = mysqli_connect("sql100.epizy.com","epiz_31803372","KOesc6yox5By","epiz_31803372_website") or die("connection failed");
             $limit = 3;
             $offsett = ($id - 1) * $limit;
            $sql = "SELECT * FROM contactme LIMIT {$offsett},{$limit}";
            $resut = mysqli_query($conn,$sql) or die("query failed");
            if(mysqli_num_rows($resut) > 0){
                while($row = mysqli_fetch_assoc($resut)){
            ?>
            <tr>
              
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['cnumber'];?></td>
                <td><?php echo $row['problem'];?></td>

                 
            </tr>
            <?php
              }
         }
            ?>
         </table>
     </div>
     <div class="list">
     <?php
                      
                      $vop = "SELECT * FROM contactme";
                      $req = mysqli_query($conn,$vop) or die("2 query failed");
                      if(mysqli_num_rows($req) > 0){
                        echo "<ul>";
                        $total = mysqli_num_rows($req);
                     
                        $total_page = ceil($total / $limit);
                        if($id > 1){
                            echo '<li class="select"><a class="select" href="vip.php?id='.($id - 1).'"><i class="fa-solid fa-angle-left"></i></a></li>';
                        }
                       for($a = 1;$a <= $total_page;$a++){
                                          if($a == $id){
                                              $pageid = "select";
                                          }else{
                                              $pageid = "";
                                          }
                        echo '<li class="'.$pageid.'" ><a  href="vip.php?id='.$a.'">'. $a .'</a></li>';   
                    }
                    if($total_page > $id){
                        echo '<li class="select" ><a class="select" href="vip.php?id='.($id + 1).'"><i class="fa-solid fa-angle-right"></i></a></li>';
                    }
                    }
                    echo "</ul>";
                      ?>
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